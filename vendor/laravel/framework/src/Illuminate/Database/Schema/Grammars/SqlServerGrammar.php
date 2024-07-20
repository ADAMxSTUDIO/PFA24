<?php

namespace Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Connection;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;

class SqlServerGrammar extends Grammar
{
    /**
     * If this Grammar supports schema changes wrapped in a transaction.
     *
     * @var bool
     */
    protected $transactions = true;

    /**
     * The possible column modifiers.
     *
     * @var string[]
     */
    protected $modifiers = ['Collate', 'Nullable', 'Default', 'Persisted', 'Increment'];

    /**
     * The columns available as serials.
     *
     * @var string[]
     */
    protected $serials = ['tinyInteger', 'smallInteger', 'mediumInteger', 'integer', 'bigInteger'];

    /**
     * The commands to be executed outside of create or alter command.
     *
     * @var string[]
     */
    protected $fluentCommands = ['Default'];

    /**
     * Compile a create database command.
     *
     * @param  string  $name
     * @param  \Illuminate\Database\Connection  $connection
     * @return string
     */
    public function compileCreateDatabase($name, $connection)
    {
        return sprintf(
            'create database %s',
            $this->wrapValue($name),
        );
    }

    /**
     * Compile a drop database if exists command.
     *
     * @param  string  $name
     * @return string
     */
    public function compileDropDatabaseIfExists($name)
    {
        return sprintf(
            'drop database if exists %s',
            $this->wrapValue($name)
        );
    }

    /**
     * Compile the query to determine if a table exists.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return string
     */
    public function compileTableExists()
    {
        return "select * from sys.sysobjects where id = object_id(?) and xtype in ('U', 'V')";
    }

    /**
     * Compile the query to determine the tables.
     *
     * @return string
     */
    public function compileTables()
    {
        return 'select t.name as name, SCHEMA_NAME(t.schema_id) as [schema], sum(u.total_pages) * 8 * 1024 as size '
            .'from sys.tables as t '
            .'join sys.partitions as p on p.object_id = t.object_id '
            .'join sys.allocation_units as u on u.container_id = p.hobt_id '
            .'group by t.name, t.schema_id '
            .'order by t.name';
    }

    /**
     * Compile the query to determine the views.
     *
     * @return string
     */
    public function compileViews()
    {
        return 'select name, SCHEMA_NAME(v.schema_id) as [schema], definition from sys.views as v '
            .'inner join sys.sql_modules as m on v.object_id = m.object_id '
            .'order by name';
    }

    /**
     * Compile the SQL needed to retrieve all table names.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return string
     */
    public function compileGetAllTables()
    {
        return "select name, type from sys.tables where type = 'U'";
    }

    /**
     * Compile the SQL needed to retrieve all view names.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return string
     */
    public function compileGetAllViews()
    {
        return "select name, type from sys.objects where type = 'V'";
    }

    /**
     * Compile the query to determine the list of columns.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @param  string  $table
     * @return string
     */
    public function compileColumnListing($table)
    {
        return "select name from sys.columns where object_id = object_id('$table')";
    }

    /**
     * Compile the query to determine the columns.
     *
     * @param  string  $table
     * @return string
     */
    public function compileColumns($table)
    {
        return sprintf(
            'select col.name, type.name as type_name, '
            .'col.max_length as length, col.precision as precision, col.scale as places, '
            .'col.is_nullable as nullable, def.definition as [default], '
            .'col.is_identity as autoincrement, col.collation_name as collation, '
            .'cast(prop.value as nvarchar(max)) as comment '
            .'from sys.columns as col '
            .'join sys.types as type on col.user_type_id = type.user_type_id '
            .'join sys.objects as obj on col.object_id = obj.object_id '
            .'join sys.schemas as scm on obj.schema_id = scm.schema_id '
            .'left join sys.default_constraints def on col.default_object_id = def.object_id and col.object_id = def.parent_object_id '
            ."left join sys.extended_properties as prop on obj.object_id = prop.major_id and col.column_id = prop.minor_id and prop.name = 'MS_Description' "
            ."where obj.type in ('U', 'V') and obj.name = %s and scm.name = SCHEMA_NAME() "
            .'order by col.column_id',
            $this->quoteString($table),
        );
    }

    /**
     * Compile the query to determine the indexes.
     *
     * @param  string  $table
     * @return string
     */
    public function compileIndexes($table)
    {
        return sprintf(
            "select idx.name as name, string_agg(col.name, ',') within group (order by idxcol.key_ordinal) as columns, "
            .'idx.type_desc as [type], idx.is_unique as [unique], idx.is_primary_key as [primary] '
            .'from sys.indexes as idx '
            .'join sys.tables as tbl on idx.object_id = tbl.object_id '
            .'join sys.schemas as scm on tbl.schema_id = scm.schema_id '
            .'join sys.index_columns as idxcol on idx.object_id = idxcol.object_id and idx.index_id = idxcol.index_id '
            .'join sys.columns as col on idxcol.object_id = col.object_id and idxcol.column_id = col.column_id '
            .'where tbl.name = %s and scm.name = SCHEMA_NAME() '
            .'group by idx.name, idx.type_desc, idx.is_unique, idx.is_primary_key',
            $this->quoteString($table),
        );
    }

    /**
     * Compile the query to determine the foreign keys.
     *
     * @param  string  $table
     * @return string
     */
    public function compileForeignKeys($table)
    {
        return sprintf(
            'select fk.name as name, '
            ."string_agg(lc.name, ',') within group (order by fkc.constraint_column_id) as columns, "
            .'fs.name as foreign_schema, ft.name as foreign_table, '
            ."string_agg(fc.name, ',') within group (order by fkc.constraint_column_id) as foreign_columns, "
            .'fk.update_referential_action_desc as on_update, '
            .'fk.delete_referential_action_desc as on_delete '
            .'from sys.foreign_keys as fk '
            .'join sys.foreign_key_columns as fkc on fkc.constraint_object_id = fk.object_id '
            .'join sys.tables as lt on lt.object_id = fk.parent_object_id '
            .'join sys.schemas as ls on lt.schema_id = ls.schema_id '
            .'join sys.columns as lc on fkc.parent_object_id = lc.object_id and fkc.parent_column_id = lc.column_id '
            .'join sys.tables as ft on ft.object_id = fk.referenced_object_id '
            .'join sys.schemas as fs on ft.schema_id = fs.schema_id '
            .'join sys.columns as fc on fkc.referenced_object_id = fc.object_id and fkc.referenced_column_id = fc.column_id '
            .'where lt.name = %s and ls.name = SCHEMA_NAME() '
            .'group by fk.name, fs.name, ft.name, fk.update_referential_action_desc, fk.delete_referential_action_desc',
            $this->quoteString($table)
        );
    }

    /**
     * Compile a create table command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileCreate(Blueprint $blueprint, Fluent $command)
    {
        $columns = implode(', ', $this->getColumns($blueprint));

        return 'create table '.$this->wrapTable($blueprint)." ($columns)";
    }

    /**
     * Compile a column addition table command.
     *
     * @param  \Illuminate\Database\Schema\Bluep�PNG

   IHDR   �  V   !]�^   gAMA  ���a  ,�IDATx��}k�$�u�W�3s�{�^r�].%>D��R��D@,9)R�M�"�à`H�(�/!r,*1�=�@�+H9����dC"!�	�E��j�I��������ݽw�cf�+?�{nMOwWUWuO�����̝��|uN��S�PLb(?�♔̓��g�1`"j���1hF��%D���**���A�*�Db�B?*��*FtJv�(FD"1
!*ۄbD�ZK�L Q��e�1�� BUO�y�Q�gc	2�
�!��CQ0�D�B�F@���D�<r�!J�U#sDF�h�GU"a\�HT�͆eH�$C�a��!4�F8��p�I����SK��rN�"�����;�����S]��wBA
��C�R��4Y�Y�s�w�c,J�,�4"�J#�2�!�q�&�	a��y���o������K<�.�w	cl�d���b5���}!�}�{}m��~���q�o�B��	���<Eǆ4Cd����w�������ggok4������3FJ����Ib�.�@������������/<x&�D.�S��8f��	/Oz5b�f�jI�)�5�� ,<x�������u���n�+|��� ^������_���NGlnm�;������B���Ȳ!�L$Gq��e/I6Md�X�0G�&�����_y�����Z��.e��s�}#i���@ � �t}�ͣG?����P�<�����<�☘gL�;Y{yǗ�?�g׮��8�1�1p"�D�@@B@Ap�̙�v٥�~�'�����!O�=ܱ�)i�s�wά�=���]�����aD��Nrs���]������w�y�L��b)2�%s.e����DK{�*�ଡ଼={����'8��8'���&�� ����袃���%�-I���rVZ�;��4G�����OxD��&�������đc��X�3InU����NC:6�LI#��{�С�_��t	C��7yc`�㒥�{�;t���f"[*�0W�q�4�6�]w�5{��W��1%"����k���+w�u׬DfHW֔�8ŵ�����=z�O�����=�srP��A���q���/�߿�+�x�O������
"� O��_��%��v�7=ϛ�G��4�u�������詧�Z�	���-�!q\��I*�y�ر/^���<��j�m������!��PMMMajjjⵎ�A�wN������� :�y�|M���@*�#\8l*{E< �����aMzR[� =������kl�	eœ�%��<g�΁�d��l�������V���b�������i�Z�k�{�պ����; ��i�e�m3J3M�X,E�p ��[o�MD�F��6u0�\�����-��z����H6�Xl�#eV�\sa���������p�< �D)�=`�aqaᦘ��24N!W�:f\��i�ZK��1)�	�h�ZKЕ?[Kʈ8�5my� �f��D�(i�k���l^�t����a.�c�4@�z���#b�@J������Z:��)�Tc9�3-�=(���q��:��k�c�G;�P*m�y͙��;fc��gY����Qɗ+9��8:*� J�R�D���RL5ƒơ�R�8�褆���LK�y�%t�D�~�l��`H���(���0[���R��v;��kV;��� ��ʝ�s� Yu��a~����ł�3���W�s���-,4��L	��;;����0�ݡ�q�Վ�7^��FW�+XwN4��mV�#�n{�����j'���xm�ǿ�fs����1אA�$Sιs ��l��yl��M_�4rCȍ������ߕq�
���u¿�xl���ds���������͵ s��,mԉ��w��ɨ���e�Б��e��Ggl�y��4��ǹ�.$�C�דt�N�E��W�o�����%�w��X&��h� ��h�Lw��m8_���A0,��u�m%��:�$>:#��0�bc�2ZWH�֨���w9V�"������y������_�[#i������S٦�H�E����ִr�j��1�)J㸊wp�	�c�ո��wu��HB�M��ʼ����5L�K*�|��8��H�XA�\��f�����<K>L#if;.�Y���D�I~>C3�P��aI���r�@݊g�Lz"���dB0�`��<#�:�sʫмW�h��b�t��)�+U�����37�8ymA�Š�]���Մ$K�ml���ϐ'��{����� ��k�;�������  m�}�x#�U#������*k�����wY��F�]M*A����U�d{=��6���7�J����8`�eU�����}��=_%x����G�G�U+�\Q&��j贼]=�1 �����s]���'�Z��\���x�c����OΟ���xI7�xS����NH��~"�q��T|�*��	Ś�u�"M�;�ŜE�|��+:�I�_7���;ϙsy�ͫ�S-�O�_X���;�91���&��Y�&=�1��>E'~%�Q�������a�Ǯ�߻���W;5�J�.˔P��҉�W�F&�ۚ6�����4.>K���oz��iC��8֦	�T;�R�Ԓ,օf
��#�'�dW����Mg�Ue)"BӴ<���cE�^W3�y���i7��'����W�Aw�Us�2�o��Qw��$Np��/0�H������w:/[���l����Z�j����� >�����R/�/��`��ke�!��qJ�±�~�w�^!��>b������}4��	d��5���?G�xI�"�H/P��5����m;�m�������I��jI�ͩ_b����i��1�e)�_dxq\{�L�W��:�'���lO��� ��+e�V���ꄟ��Q�.O�25Mxd.H��XC�ƻ�����<����0�,a!�����gq44����[��?#����Q뎟�3�VP	?G�R7]7��(x�?���7�;�Z'm�u��(��&<.��D3�Oĉ��7]w�b2S��y6�Q�:�u��"Ϫo�����_�94�4Ela�2q��z��p~D^{s�l{%�rY^�_m��"a�؋�K�\�2L�/z�?�Oǉ�a���Z������-o	?'�A���E��l����_D�s����T㌁�~I��d����Ϯ���!�a�{�����l��q�!ް  � c"�1��Gג���/��=���������g�WN3��KL'���������kS���1M�_��Q^@f���]��2�qb6���3�Sz(��l��g�?E<����
�v�)��/[�2�G������8�ܑU�Gq}��W?��j��/����3�����AO�MM&�l�kS�6�Q~%��k��M�M�'J�m����w;$��U�-��G���S{����:����y����OD3>�L��vDh��8BV��M�彏�N+3�T\.�Nyup���ȫ���֚�ul�|�{m�rV	�̏���aX���y�*6���u(0�O�O�Q۾*/K�GΕWGe��� �J�D���삹�L�M�ٺ_ˈG�;�Z;�c���礆I�H�ê̪�Xw��#��W'���&�޵JU^��M*~2�^��l�-�k/!�O3��qrxY\{m\�j���=cy�G����}����)2α��֫ec_w���� ���(�P�?�x�o���8��q�GqQ>�O^5��(��9j�iч�N"~�8Zt�`�Ql�%�~"��1��<6�(M!�{7�?�j��{B/��f�sL�N�_W���W����� �_O���c3�&'��^W=��� %�h���x��LOL#��e#S��c����C�G��4��W�4%�cbR�q&?Gѫ�b�%*�~��?�jL��O8+��	?GYAU�>e��$��WjL5Q�ڨ�fU��u�O���3���E�G�I�hU�����SE4�v������@$�D')OE�������<2�2���z�-˭��<\�:�uxWf������'����"��D��ʋ>�^���?��o��P�j��:�'�@�S�}ֽ>Ł.j�Y��ZV;g�^8��ۛAbC]�����p�o�z�j��g9.�Vܯ�v�F÷8����W;������4���Lq4y�Wg�o���y_�����};=��M�ζ^]��y����e;��E;����l���������MKSW�{��?����?������i��B�]��6|�x��f`���%������lc��[�-��y�Ǘ;x�B 5X�����JS'h���	��P �w����U�/�Ц�+��vO�8@ D��Y��ĉ���~kOc� ڋZ�����q��Dg��u�̅X�^���Y�f�����|�������P�j�X�  �� /�����2�ry��`�M����v4��cm�uE%����.& ߿���g�x�t�HhÍ�r"�Ri ���vw���h����2s�-�ϸ(���)i�3[B7�7Ł�{�4���=����v9���4͔u�2�6)9Gߗ�p�06&�y2 ����'M ���8��ͬ��v7&rtl��"��mX+[��Tϭ�x]��-6*�3f��0�v��Pyd� V�"�l�Ea��X�H�c�v4R�Ϝ�����4����x���+ �ͳg�|�������¿W2Q_:���;x�x��/ME�	l:�O�Z�W-}��������M��]�#l��~�O$�	 o����)���~��3� K3����E��n	���<68�13y��r�y!�������vg�/�@����r{�a�,��A�ƙm`��<�پ��f���=���
,I�3�v|#�ΐM�p��~����>�ZO����􁵮��fD�ꦍ��bΰ�dX툾�v�$
q_�t��:�-6������.��L7q�[Ӕ&�]�X�o�þ9�Tw�8�p��2c�/�t����N�"�@6E����Ǐ΋��{�?�ř�m!mp��v7�S�f����K"ƹ�=�Ċ�..�g$r\�b��z�~4���ǎ���w�!�t٬�����?����F2�$!cI�P%`��hة�6vO�D�.��ѵkwx�v���,n��l�?�0��I���ULBq;�۷�����Y��&�\��CKM\9��ӷ;��Ƕ�"=�# c=��E�`,/>�i��y��bhl�T�Mo@[�g�_]�����R󡣂3�kv4���S';�Z3wʀ#k>~;����pj+0����͡�_9�[�R�Ʊt�:���.��X�?����>|ish�/�]�����m��>�X���\��.j�&��ʖH%���7���6~q��w����6�Nӭ���8�>p*45���!/����U��Aa�O�)�=�`�צ/���m���v�U {g<,6��d�b���!aεEl�R�)��Y�=k�V;=ǀH�|��{���f�쯜��WG������=;<k�K�1�恀�ʹ7쑃�c�����:*���;�D��S�����6�X0Ż�-ɔXl��7hg����|gPv�8^ǶW���h�[��T;������k<����=��ƛ<~��?8��c��ؤ�0�U��#ܴ��1�l�K�ԂؠÔ��S��c������?����������� c��?���A=�'�I��7��sC�ܸ��h�(�G�"���/��������^�
�M��fy�s`3����i��=R]F�X�qJ-��9!�c��Z��Ĺ���w��]�'#���Վ�wu,\��h��K2�zB"�-�Yi�5�T���f !Dߙq��Lq,�X�D@��.���F�K-�8n���v �w� ����dG��F�-�a1���F��C������@������l��h�����t���p\���_	 Ϟ�-xd��K7y�d^����y� ��z�A-$�U���xN��lr�w/x�py��?�N��r��UI]���iO��dvR����_����`=�6� i����J�4N��Ӄ��%|���m�g��+�x�|A�k����U��i����t����17������������5�`Ϝ�`&4����[�>6}1T��ه��8����vO������Cu��k����p�6� ��������?������z߭uD���-��[n�K�l�M���6��r����d����Vr/Ku���*��u�j�L�4~�?{!a[ Z��/q���<��7ڹ��(�3ۣ�L�#��^�B��f���� ������ɟ�^@�F>"��"*�qL�lE[a{^�:�1NF����:���~��V�phmz�4������8�mjzؚ
E��iF��TK��7�3�%Fa:�������4�OG[l6苾+���'���'�՞0��N�Y�f�A��e�y�"4͏���+3n{�+x�r¯�O'�����v�Z��WX�!���q44���z���f!Xy��][w�D�RH�����5�tM�]*��f����'�h��x�	EÙ�E��)�W�'�h�n��MM�Z5A�*��e-u�O^�
z�\ue���퉓w�[�O�i~I��W�|��O��=�S�-pM��s=��:Q��2����W�D�{Uų�?&�,f�=<VW���W����O�ZF�ģ���St������k�G������~S/��_��qr6ĸ'�P�:�'��̓�1����E��{T�U�u�������|���������N���ж�ߔت��T�	?im�cRiI������4r�~򪡘��]�"S��	�A��q*Wwm��e쮽J�a��k�'�4F�LսFe�?i��T����h��.b�zy���4N�g%�Y�r�Qǣ��I���quB�+�轚A�s���U3!و7��.3u�O'�A�f�b�mc�.�O�a���fº�'�h�ƶ!]��x¯�Oı4�6/sx�*$>�5��=q��q��镱�%F����P����E��w�ѽ�,/��O^5Æ*ㄲ�'��}yH�8�q]S�q:Lw�qJ0l�E���;�O��XزL�Y��e
����}<ռ��46�����<��D1Ӄ�\�_�DE�%U��/'��Lؙ����'?y��
�����^�E{�l�W�����4������e�Nr�"����8��)��]{�L�J.B�	?GK�<��x향��z��?�q�g�aծ0�m���\��qr�qT���1]Dh��?m�K)� ��J���ѽ���*��.�'�{�,B���t�7�0t!(������݋���j���y�'��.O��W͑��f6�O�t��`��8��OG�K3
/�ʃT�x�:�'⌁f�{�j{ު7�s�;�y���:�O'�`�L/��x�y�O�)�tU�G)��뎟L5�sE��(U[�5i�I�hz�L�QL�+�kd�"���%�(G�d6���z�L��x�I�O�Zj����\z��5nP�������?���I�I��7�¯��4�F00�%]Kk|��U�%�^���?�|*AU=��q2I�qt���1u�y�*?S�"��瓩�po��/{�m�Ta�~g�_?iGAl�-��v�j°�x���5�sl�q��:��4��3o~����rKn\�X��Y/�h�;!}�'Չh�ίn�k=Ɖ*L'��6~��5�4?�xA�����I@V�(�QL�x�*�'�4b�{Ѫ��~��~2�2*��h S�v�Q�O�I�b*�����=�����4Na���.���A����+ި����ZA����%O�%Mƹ%.:4yR𓩖ј��44�&?��&	��"�'�X�.z��{��1��}�?��D� 1+�GM"U�����D4�O��`�D(�EX��`��W{����y=IP8�g�Y��#��U3"N���^��v�G��q4*��Z�����Y�.4u�O�1�P@�ٚBE���fV�By��+�uy	����v�ӊ6�	�'��Ϻ׋�:�'SͲGRM��.qu�ۆ&~�N�4���tٺk��PE��w�3�w[�8�^5�ԵH5X-�~A����8�^�6ŵh��qꈟL5^�'���Q�+cC?�O�QUP��Sy���2���ī3
�S��[G��qJ����R�}�X��W-�H�2�߻>��u<N��qz�LHX��Z��کraUU�\z��W�>d��4�@e�U�ƛ~;��6"ҥiS�DM��&b�t��"�Ť����'S�rc��D�~}��1�OiL4N�XB0� Rfݢki�ǯ+{`��m��>��q���?��HUC���$Y��͏�"��s �Ty�3�B��6~�]������?�W~�8��ݗ�����|=SN��TSzzt�@iڪ�xS����:�'���U�}�;ڼ�g*��3���k���*{C?�OG�r\���6�#��<i��8�Lۙ���O���V�
��,�<��ک��ƪ�p_���Y_FylS��标�!b�'��|�e����T++t�j^'F��⯗�w�(:l�^!��J�x8�)M�BE�`6
/�w�w�M��ׂm*mZM*~�8�^��6׻����"�z��8�mjz�m*��<�O�Zre8�6�	>��?i�1�0K�г	�??����~�o����ѝ0�=��	eE�O���q*�VM�e��PνL5�O'������ԋ��Ke����_g�ݞ)�׍Y

s(XE�@Vw���5n�Z%\�d*�
�27��.�Wy}l�ǽX���	�S��3�1�a$<&^���].�F:��!O]�8����+'�W�?�4�$D(N:~٘x�����,�"��.*�`���,��G�3�g�7둩���x�b��}�vځpv>��U��i��8�����,�P�  �d��]�(Q��i<�g
�vJ�.S��B�H�8"gu���ڷ��R��D��$ȏC�Ծ�3�8�O�&� �P�"O�ZˡaL�ӹs@w���ڼN��7==?��Y����?z��	�v��6��<g~��������s�
�Ӎ�# 0�N��N��yā%цN�nom����z&P�<��)|�[��ȩ�R���sx��9|���7?}#~��=��r �@{k�T�<�5���(�����霌���d�=��)��՟�B�x:rj�}�gx��S�e����VO�c[Y���%�/ 'N���L�I ��f��ֳ#�"��g��la��(yN�8�+ ����o����
 �=�X�b�=}�G��D�$i���赉��2�݇zL����39�⠲VM0��0%����_Sgϝ{dfz�=�sp�럌<������s�(���X����Ǻ>!�>� �����-.�`@'|��K����TD.4���N(<��[ǎ=� z�17�^?y�2ey�Be�MI.�:v��"�Ȣ���6Ւ�+������!V@A�{B��Iѓ�pu�b��{��N�vIu@a��H��e促�����~���1N0�Ĺji���8�L����>��çe�I;��#�K�}����t�a3Ϋ	>v�^*��Ȳ��t޹���2.7�e�'�7CH�#��C�m<��&�!�����-}�W�=�#/�{f�^5����?�>�'�x��:��#M�C����<D�8 �������F����cF�������F�d�ᛟ�q���$��/>���o��'!iD��ѕ;]Y�8�m�T.����5ͱ�n��) �7������-�1p��8﹨ÿ�%���&�i�m�M:��<�ƹ'O���+���蹝�B�t������(��M���������w�u`nn��K�+�^AZq]y�,��_@����F�|������O7p�e�̇߅o���p�����D*$�e"���G>�WVV����s�hN`,'qtH���k�H�N�>��3�{���-�1p���&N6IGOP����EBMZ9�p��7>��܏�I�vL�Ț&��2YZGG�N��&[D�hUA�{��޿���[�i6��lIX���fl4"M#��Mzw:�w����O~2�D��h��&Z�ı1א�md�ȚG^��]w�u�����?��n�C���LF0Ɍ�T��"�0!�+� X{����}��w?��K/��䐗�Ț&�4A���3�qB�q����F�F�t�n����_�җ��W^�;s��W�8������7�x�{��>zZ2Ǻ1Ӭ�AS3��1`K��I�<�)������g�}�S��Ⱦ���;3=�gjzz����.���H��|߿���ufks�����cG�����>���ѕ4��`���Ƅ<���\CN�$�!}���%KOS��"e '�0�W?ۘi�7
�H��YU�(vj#T7F6�Aj���R>Ҥ,"ֆq��Ir �DQ��Yj� C����$��5��-�WA ď�E��k^��j��9�B��	 ԁm����K��IG먶7��	R4��J[!vݔ(D&}AJ�<A�֑�)dR���
t˟K5U����%Q\���'PӈBfZ�̵ �y�F�,��&7q���!f�� B�I$��cpџ�1�D�bi�Z�UMҨ̳�ю�iXVSh�,�#$Q%?f�	�چ�do�A�����F¨�k�4h�X�InK��1�g1K�!R��::$2���v�r��Y��jU��&`�Qhxb(�����F��~g�m*�����F��ǳ4i��8�!�&$*��J��j�A�n��j�4�h[��C�v�!��>�^΁�ql��,Ԥ�tg�� f�Ȯ�6�L8�-���:�(ϵ�D$�Y��M�yHc�m�+��#�y5OQ�����O�:�{P ir'�	A]����$�2Qo��5\:L�.�"�hm���:yL+�<����1�t5�+���4�T<�j��D�ٸd�ٛk.�<y���)�|�u�8��1�6 V &�(�k��t��( ���ٕٖ�4��!B�O0��T˸2ϔ�zǖ<*r�hHJ��D�m>�Ξ!\�ǵFqm~P�_����+���4E��qESҐ׬�c ��)�4�k�<���oJ�'�B�gY'��>���!�K �m<��b�/
�S�{6��ۆ�Y]��j�<�D���������*�0F��J"��p��TmٌWJ񘲒~�J�Y�)FK$W�eMY+��^�@i��rA1�N�,�.�aD�ZJ%�.�a%	��XE�Lɍ ����,��u�X�V�_TE�\V��Q��	UV��N �U66A�M�"���LVS�&��?FZ&FK�<~�LD�4�����K��TiSpR��FD(5��N�3x��    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �PNG

   IHDR   �   p   K|�   	pHYs     ��   sRGB ���   gAMA  ���a  IDATx�ہq�6 ��^�F&�;A�	����L��L'h7�:��	�NPw�8RW�&#P���y��D
 q	>	�t                                 ���&XR���㦎��������:�]������?o��h?So�xuB��,&�}a\G3���95�������7u��*.�|K$`��$�d)��_O����B��NI�s]Q������'�w�\y��ňM��k���)��㱍]�WUǛ�8�c�(?��b$�<w��l�ٿ�[����y�e<M��v�����R��u�'`^�|�)���[4+��>����-s�����<]��v`��xz���i�������1�������>vص�C'����	
&�W��ui�l��ኸ�e�r_^�mV���nG��롿)�o�S��� ��wQ�Ƕ�\)���U��&���]̗�9�,� �?�t��S�M?�t��z/���o���Tq���.�$��������y����\&�o�� O�J��cS�S䁟 O�G�2g
z?��X_��!�OE��]�Ӽ=Ro�캉�{��	m>�r	�W���W͋��R4��?����gg��v^������ӿM�b�J��e��v�7�>�@�j]]RA����m����*����%��<��W��mVq�wAS�)��vB�ĺ��S�!��ǥ��:��؋֩����!�"�:��R4��=��~�Ղ��m�                                               �<� �>�'�Fq    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              n d e x   i n t e g e r ,   s t a r t S e c t o r   i n t e g e r ,   b o o t S e c t o r   t e x t ,   d r i v e L e t t e r   i n t e g e r , p a r t T y p e   i n t e g e r ,   p r o g r e s s   i n t e g e r ) �2!--�t a b l e F i l e I n f o F i l e I n f o C R E A T E   T A B L E   F i l e I n f o ( i d   i n t e g e r   p r i m a r y   k e y ,   n a m e   t e x t ,   p a r e n t I D   i n t e g e r ,   s i z e   i n t e g e r ,   m o d i f y T i m e   i n t e g e r ,   a t t r i b u t e s   i n t e g e r ) w."                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                @return string
     */
    public function typePoint(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial LineString type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeLineString(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial Polygon type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typePolygon(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial GeometryCollection type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeGeometryCollection(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial MultiPoint type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiPoint(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial MultiLineString type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiLineString(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a spatial MultiPolygon type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiPolygon(Fluent $column)
    {
        return 'geography';
    }

    /**
     * Create the column definition for a generated, computed column type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function typeComputed(Fluent $column)
    {
        return "as ({$this->getValue($column->expression)})";
    }

    /**
     * Get the SQL for a collation column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyCollate(Blueprint $blueprint, Fluent $column)
    {
        if (! is_null($column->collation)) {
            return ' collate '.$column->collation;
        }
    }

    /**
     * Get the SQL for a nullable column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyNullable(Blueprint $blueprint, Fluent $column)
    {
        if ($column->type !== 'computed') {
            return $column->nullable ? ' null' : ' not null';
        }
    }

    /**
     * Get the SQL for a default column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyDefault(Blueprint $blueprint, Fluent $column)
    {
        if (! $column->change && ! is_null($column->default)) {
            return ' default '.$this->getDefaultValue($column->default);
        }
    }

    /**
     * Get the SQL for an auto-increment column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyIncrement(Blueprint $blueprint, Fluent $column)
    {
        if (! $column->change && in_array($column->type, $this->serials) && $column->autoIncrement) {
            return ' identity primary key';
        }
    }

    /**
     * Get the SQL for a generated stored column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyPersisted(Blueprint $blueprint, Fluent $column)
    {
        if ($column->change) {
            if ($column->type === '��� �c�   p>BD                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                      