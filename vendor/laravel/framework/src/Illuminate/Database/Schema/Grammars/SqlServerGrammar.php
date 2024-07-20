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
   
!*ۄbD�ZK�L Q��e�1�� BUO�y�Q�gc	2�
�!��CQ0�D�B�F@���D�<r�!J�U#sDF�h�GU"a\�HT
��C�R��4Y�Y�s�w�c,J�,�4"�J#�2�!�q�&�	a��y���o������K<�.�w	cl�d���b5���}!�}�{}m��~���q�o�B��	���<Eǆ4Cd����w�������ggok4������3FJ����Ib�.�@������������/<x&�D.�S��8f��	/Oz5b�f�jI�)�5�� ,<x�������u���n�+|��� ^������_���NGlnm�;������B���Ȳ!�L$Gq��e/I6Md�X�0G�&�����_y�����Z��.e��s�}#i���@ � �t}�ͣG?����P�<�����<�☘gL�;Y{yǗ�?�g׮��8�1�1p"�D�@@B@Ap�̙�v٥�~
"� O��_��%��v�7=ϛ�G��4�u�������詧�Z�	���-�!q\��I*�y�ر/^���<��j�m������!��PMMMajjjⵎ�A�wN������� :�y�|M���@*�#\8l*{E< �����aMzR[� =������kl�	eœ�%��<g�΁�d��l�������V���b�������i�Z�k�{�պ����; ��i�e�m3J
���u¿�xl���ds���������͵ s��,mԉ��w��ɨ���e�Б��e��Ggl�y��4��ǹ�.$�C�דt�N�E��W�o�����%�w��X&��h� ��h�Lw��m8_���A0,��u�m%��:�$>:#��0
��#�'�dW����Mg�Ue)"BӴ<���cE�^W3�y���i7��'����W�Aw�Us��2�o��Qw��$Np��/0�H������w:/[���l����Z�j����� >�����R/�/��`��ke�!��qJ�±�~�w�^!��>b������}4��	d��5���?G�xI�"�H/P��5����m;�m�������I��jI�ͩ_b����i��1�e)�_dxq\{�L�W��:�'���lO��� ��+e�V���ꄟ��Q�.O�25Mxd.H��XC�ƻ�����<����0�,a!�����gq44����[��?#����Q뎟�3�VP	?G�R7]7��(x�?���7�;�Z'm�u��(�
�v�)��/[�2�G������8�ܑU�Gq}��W?��j��/����3�����AO�MM&�l�kS�6�Q~%��k��M�M�'J�m����w;$��U�-��G���S{����:����y����OD3>�L��vDh��8BV��M�彏�N+3�T\.�Nyup���ȫ���֚�ul�|�{m�rV	�̏���aX���y�*6���u(0�O�O�Q۾*/K�GΕWGe��� �J�D���삹�L�M�ٺ_ˈG�;�Z;�c���礆I�H�ê̪�Xw��#��W'���&�޵JU^��M*~2�^��l�-�k/!�O3��qrxY\{m\�j���=cy�G����}����)2α��֫ec_w���� ���(�P�?�x�o���8��q�GqQ>�O^5��(��9j�iч�N"~�8Zt�`�Ql�%�~"��1��<6�(M!�{7�?�j��{B/��f�sL�N�_W���W����� �_O���c3�&'��^W=��� %�h���x��LOL#��e#S��c����C�G��4��W�4%�cbR�q&?Gѫ�b�%*�~��?�jL��O8+��	?GYAU�>e��$��WjL5Q�ڨ�fU��u�O���3���E�G�I�hU�����SE4�v������@$�D')OE�������<2�2���z�-˭��<\�:�uxWf������'����"��D��ʋ>�^���?��o��P�j��:�'�@�S�}ֽ>Ł.j�Y��ZV;g�^8��ۛAbC]�����p�o�z�j��g9.�Vܯ�v�F÷8�
,I�3�v|#�ΐM�p��~����>�ZO����􁵮��fD�ꦍ��b
q_�t��:�-6������.��L7q�[Ӕ&�]�X�o�þ9�Tw�8�p��2c�/�t����N�"�@6E����Ǐ΋��{�?�ř�m!mp��v7�S�f����K"ƹ�=�Ċ�..�g$r\�b��z�~4���ǎ���w�!�t٬�����?����F2�$!cI�P%`��hة�6vO�D�.��ѵkwx�v���,n��l�?�0��I���ULBq;�۷�����Y��&�\��CKM\9��ӷ;��Ƕ�"=�# c=��E�`,/>�i��y��bhl�T�Mo@[�g�_]�����R󡣂3�kv4���S';�Z3wʀ#k>~;����pj+0����͡�_9�[�R�Ʊt�:���.��X�?����>|ish�/�]�����m��>�X���\��.j�&��ʖH%���7���6~q��w����6�Nӭ���8�>p*45���!/����U��Aa�O�)�=�`�צ/���m���v�U {g<,6��d�b���!aεEl�R�)��Y�=k�V;=ǀH�|��{���f�쯜��WG������=;<k�K�1�恀�ʹ7쑃�c�����:*���;�D��S�����6�X0Ż�-ɔXl��7hg����|gPv�8^ǶW���h�[��T;������k<����=��ƛ<~��?8��c��ؤ�0�U��#ܴ��1�l�K�ԂؠÔ��S��c������?����������� c��?���A=�'�I��7��sC�ܸ��h�(�G�"���/��������^�
�M��fy�s`3����i��=R]F�X�qJ-��9!�c��Z��Ĺ���w��]�'#���Վ�wu,\��h��K2�zB"�-�Yi�5�T���f !Dߙq��Lq,�X�D@��.���F�K-�8n���v �w� ���
E��iF��TK��7�3�%Fa:�������4�OG[l6苾+���'���'�՞0��N�Y�f�A��e�y�"4͏���+3n{�+x�r¯�O'�����v�Z��WX�!���q44���z���f!Xy��][w�D�RH�����5�tM�]*��f����'�h��x�	EÙ�E�
z�\ue���퉓w�[�O�i~I��W�|��O��=�S�-pM��s=��:Q��2����W�D�{Uų�?&�,f�=<VW���W
����}<ռ��46�����<��D1Ӄ�\�_�DE�%U��/'��Lؙ����'?y��
�����^�E{�l�W�����4������e�Nr�"����8��)��]{�L�J.B�	?GK�<��x향��z��?�q�g�aծ0�m����\��qr�qT���1]Dh��?m�K)� ��J���ѽ���*��.�'�{�,B���t�7�0t!(������݋���j���y�'��.O��W͑��f6�O�t��`��8��OG�K3
/�ʃT�x�:�'⌁f�{�j{ު7�s�;�y���:�O'�`�L/��x�y�O�)�tU�G)��뎟L5�sE��(U[�5i�I�hz�L�QL�+�kd�"���%�(G�d6���z�L��x�I�O�Zj����\z��5nP�������?���I�I��7�¯��4�F00�%]Kk|��U�%�^���?�|*AU=��q2I�qt���1u�y�*?S�"��瓩�po��/{�m�Ta�~g�_?iGAl�-��v�j°�x���5�sl�q��:��4��3o~����rKn\�X��Y/�h�;!}�'Չh�ίn�k=Ɖ*L'��6~��5�4?�xA�����I@V�(�QL�x�*�'�4b�{Ѫ��~��
�S��[G��qJ����R�}�X��W-�H�2�߻>��u<N��qz�LHX��Z��کraUU�\z��W�>d��4�@e�U�ƛ~;��6"ҥiS�DM��&b�t��"�Ť���
��,�<��ک��ƪ�p_���Y
/�w�w�M��ׂm*mZM*~�8�^

s(XE�@Vw���5n�Z%\�d*�
�27��.�Wy}l�ǽX���	�S��3�1�a$<&^���].�F:��!O]�8������+'�W�?�4�$D(N:~٘x�����,�"��.*�`���,��G�3�g�7둩���x�b��}�vځpv>��U��i��8�����,�P�  �d��]�(Q��i<�g
�vJ�.S��B�H�8"gu���ڷ��R��D��$ȏC�Ծ�3�8�O�&� �P�"O�ZˡaL�ӹs@w���ڼN��7==?��Y����?z
�Ӎ�# 0�N��N��yā%цN�nom����z&P�<��)|�[��ȩ�R���sx��9|���7?}#~��=��r �@{k�T�<�5���(�
 �=�X�b�=}�G��D�$i���赉��2�݇zL����39�⠲VM0��0%����_Sgϝ{dfz�=�sp�럌<������s�(���X����Ǻ>!�>� �����-.�`@'|��K����TD.4���N(<��[ǎ=� z�17�^?y�2ey�Be�MI.�:v��"�Ȣ���6Ւ�+������!V@A�{B��Iѓ�pu�b��{��N�vIu@a��H��e促�����~���1N0�Ĺji���8�L����>��çe�I;��#�K�}����t�a3Ϋ	>v�^*��Ȳ��t޹���2.7�e�'�7CH�#��C�m<��&�!�����-}�W�=�#/�{f�^5����?�>�'�x��:��#M�C����<D�8 ��������F����cF�������F�d�ᛟ�q���$��/>���o��'!iD��ѕ;]Y�8�m�T.����5ͱ�n��) �7������-�1p��8﹨ÿ�%���&�i�m�M:��<�ƹ'O���+���蹝�B�t������(��M���������w�u`nn��K�+�^AZq]y�,��_@����F�|������O7p�e�̇߅o���p�����D*$�e"���G>�WVV����s�hN`,'qtH���k�H�N�>��3�{�
�H��YU�(vj#T7F6�Aj���R>Ҥ,"ֆq��Ir �DQ��Yj� C����$��5��-�WA ď�E��k^��j��9�B��	 ԁm����K��IG먶7��	R4��J[!vݔ(D&}AJ�<A�֑�)dR���
t˟K5U����%Q\���'PӈBfZ�̵ �y�F�,��&7q���!f�� B�I$��cpџ�1�D�bi�Z�UMҨ̳�ю�iXVSh�,�#$Q%?f�	�چ�do�A�����F¨�k�4h�X�InK��1�g1K�!R��::$2���v�r��Y��jU��&`�Qhxb(�����F��~g�m*�����F��ǳ4i��8�!�&$*��J��j�A�n��j�4�h[��C�v�!��>�^΁�ql��,Ԥ�tg�� f�Ȯ�6�L8�-���:�(ϵ�D$�Y��M�yHc�m�+��#�y5OQ
�S�{6��ۆ�Y]��j�<�D���������*�0F��J"��p��TmٌWJ񘲒~�J�Y�)FK$W�eMY+��^�@i��rA1�N�,�.�aD�ZJ%�.�a%	��XE�Lɍ ����,��u�X�V�_TE�\V��Q��	UV��N �U66A�M�"���LVS�&��?FZ&FK�<~�LD�4�����K��TiSpR��FD(5��N�3x��    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �PNG

   
 q	>	�t                                 ���&XR���㦎��������:�]������?o��h?So�xuB��,&�}a\G3���95�������7u��*.�|K$`��$�d)��_O����B��NI�s]Q������'�w�\y��ňM��k���)��㱍]�WUǛ�8�c�(?��b$�<w��l�ٿ�[����y�e<M��v�����R��u�'`^�|�)���[4+��>����-s�����<]��v`��xz���i�������1�������>vص�C'����	
&�W��ui�l��ኸ�e�r_^�mV���nG��롿)�o�S��� ��wQ�Ƕ�\)���U��&���]̗�9�,� �?�t��S�M?�t��z/���o���Tq���.�$��������y����\&�o�� O�J��cS�S䁟 O�G�2g
z?��X_��!�OE��]�Ӽ=Ro�캉�{��	m>�r	�W���W͋��R4��?����gg��v^
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
            if ($column->type === '��� �c�   p>BD                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                