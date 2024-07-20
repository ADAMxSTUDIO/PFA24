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
     * @param  \Illuminate\Database\Schema\Bluep‰PNG

   IHDR   Î  V   !]¢^   gAMA  ±üa  ,ÇIDATxÚí}k¬$ÇuÞWÕ3sß{¹^rÉ].%>DŠŽR±ìD@,9)R¢MÊ"òÃ `H‹(É/!r,*1°= @à+H9 ”š–dC"!“	¡E“ÔjùI“»ËÝËåîÞÝ½wïcfº+?¦{nMOwWUWuOÏô©ÅìÌî©®¯ê|uNªSÅPLb(?â™”Ì“˜„g²1`"jäù³1hF„«%D•ËÇ**ŒˆAÄ*˜Db”B?*Å*FtJv‚(FD"1
!*Û„bDŒZK”L Q¦ð—eâ1‡å BUOóy‰Qgc	2°
â!‚”CQ0D‘BÃF@˜²‰D©<rå!J‘U#sDFšhÂGU"a\‹HTÓÍ†eH¸$C¤aŽî!4¾F8º§pò°’I“‡ŒÈSKÒ‡rNž"ˆ“×Ëú;éËø›ˆS]âˆØwBA
„ÊCžR‰ã‚4YŸYìsÒw¶c,Jî,‹4"öJ#•2å!qŠ&	a¢Àyä‘üàoŸŸ¿Éó¼K<Æ.åžw	cld¹‚ìb5ðý·}!–}ß{}míž~úéÜqÇo†B¤	ŽÈä”<EÇ†4Cd¹ÿþûwÝþû¿ÿïçggok4›¿ÁëÝ¾3FJ¤âäéIbø.„@·ÓùÕÚúúßþà¯ÿú/<x&…D.ÉSøº8fðâ	/Oz5b¯føjI¯)é5¾æ ,<xð’ãËË¾¹µu®Óéˆn·+|ß¾ï‹ ^”ª™âíµ_·ÛNGlnm;¾¼üç¼ÀBØö‘È²!ËL$Gqù’e/I6MdÛX£0Gš&–‰Àñ_yåãöïÿZÃó.eœƒs¾}#i˜ÉÐ@ ‚ €t}ùÍ£G?ýµ×þPÒ<¥ö±Ñ<¢â˜˜gLã;Y{yÇ——?¿g×®ÿÄ8çœ1€1p"ËD¦@@B@ApêÌ™ÿvÙ¥—~€'Èû¨¾³!Oâ=Ü±Ç)i†sçwÎ¬œ=ûÀî]»þ”‡¤aDš‰NrsÎùî]»þôôÊÊwÞyçLÌäb)2”%s.eÚÈæÊDK{*Äà­œ={ÿììì'8çð8'“¬†&œ‚ ëëëï¼è¢ƒ¡æñ%Ó-I»˜˜rVZ‡;Äë„4GŽûã¹ÙÙOxDšÚ&Æ¢öŸ›ýÄ‘cÇþXì3InU²•õÙNC:6ÉLI#“Ç{îÐ¡_²´t	C¤©7yc`œã’¥¥{ž;tèã’Éf"[*ò0WÄqÍ4Æ6Þ]wÝ5{íÕW…ý1%"ïÍÑñk¯¾ú+wÝu×¬DfHWÖ”Ö8Åµ¶‰×÷·=zôO–––¾À=œsrPÐó¶A€À÷qòäÉ/ïß¿ÿ+ÒxÇOÛäï­¹ó
"Ó O’ô‹_üâ%·ÞvÛ7=Ï›âžG¤¡4 uÊÃôÌÌûßè©§žZ	´Žº-—!q\‘†I*·yìØ±/^¼´ô<ÎÁj¢m¶¶¶°µµ!„•PMMMajjjâµŽøA€wNžüûöíûï :èy×|M£Ò@*­#\8l*{E< Þâââ­ýaMzR[Ò =·íÖÖÖäkl¯	eÅ“¬%Ž‚<g¦Î¼dÐñl°˜™Èï»ï¾­Vëú¨bêâ˜šš²ÆiœZ˜ká{«Õºþ¾ûî; ™úiòeêm3J3M—X,Eãp ü–[o½MDÝFÆ6u0±\“‡…¶Ù-·Þz€¿äH6ÑXlì#eVè\saª™øÏãã¾¸°p“< ¤D)ƒ=`Œaqaá¦˜‰Æ24N!W :f\¢Æi¶ZK‚Â1)é	h¶ZKÐ•?[KÊˆ8ª5my´ °f«µD«(i›kŒ¡Ùl^Œt¯­­Öa.‰cë4@‰z§ÑØ#bƒ@J”Òˆˆ“´Z:¯Ö)ÅTc9È3-§=(™¦…q’¢:óÊk¡cÕG;ÌP*mè£yÍ™“€;fcÚþgYˆ¥¼„QÉ—+9¶Ö8:*¦ J‰R‘D²‘ÏRL5Æ’Æ¡äRã8¿è¤†£ñÊLKÛy“%tDì~ûlºº`Hã°õ”(‹ü0[“ŒR½®v;ÑÆkV;þƒ ÄöÊès´ YuÝ¨a~ñû‡ºÅ‚Ë3ŽøšWÎsü«½-,4™ŽL	…À;;±º¡Ë0˜Ý¡Úqè»ÕŽÀ7^ÙÀFWô+XwN4©âmVí«#þn{¿© Õÿj'À¯ÎxmÍÇ¿½fsž²“Ö1×A²$SÎ¹s ïÌlªÆyl¹M_4rCÈ­¿âùÉß•q¿
éýuÂ¿Ñxl¹íÊds²¢ ¨•º¿øûÍµ sÔÇ,mÔ‰³íwù³É¨·ÎøeÙÐ‘¥¢eÚåGgl“yÿš4¦‰Ç¹Ê.$¸Câ×“tµN°EÞÚWåoŠ‡ð¾¯%w™áX&—­hâ Ùûh‘Lwý„m8_’ °A0,ûuöm%ü¹:ì$>:#â0òbcÚ2ZWH³Ö¨°Óáw9VÉ"‘øˆÚÏy½ªÆ¶¿_—[#iûÛòþÑÊSÙ¦šHäEØüª×Ö´r™jŒŸ1†)Jã¸Šwp·	¶c¯Õ¸¥âwuÒÆHB§MÇôÊ¼òÎ¨æ5LóK*—|Ùó8„ßHþXA²\š©f´‰‚É‘<K>L#if;.¨YåÉ¤DÓI~>C3­P³­aI„¬ûr©@ÝŠgáLz"‹•ÐdB0`ÝÅ<#ü:øsÊ«Ð¼W›h®–b¶tåÕ)Ú+U¶Šð®37Õ8ymAÓÅ Ö]¤ÛÏÕ„$Kèml‰ºãÏ'áà{åõ²ÜÑ §ïká;ßõÁøÞüÁ  mÓ}åx#U#ü¹‰ëÂä*kŒã¤Îø®wY€íF¼]M*Aˆ¾ÞU‚d{=©¬6÷«á7êJ÷¤‚8`—eU˜«Š¶é}£ç¦=_%x¦÷›æGøG›U+\Q&•¦jè´¼]=1 ‚¥»Ïs]žºá'âZ¬ó\›Ðâx„cü³é¼áOÎŸˆ“ÑxI7­xSÒÚ‡™NHªð~"ŽqãéT|Õ*·ð	Åšãuâ•"MŠ;ÒÅœEÑ|¦å+:ÿIÄ_7£;Ï™sy—Í«òS-ÓOÊ_X–ð;•91îÄÑ&‘ÉYð&=¦1ƒá>E'~%þQ’¥²¦šéaºÇ®ëß»¾ŸðW;5ªJ³.Ë”P­Ò‰™W™F&÷Ûš6„Ÿˆ“‹4.>Ký›æoz¿­iCø‰8Ö¦	ÍT;ôRäŸÔ’,Ö…f
…å#á'âdW£½’Mg²Ue)"BÓ´<„ŸˆcEù^W3åyž§ši7‰'üãã‰WAwíUsí¥2ÍoÜöQwüµ$Npæõ/0œHªü¼¡¸òw:/[Áˆ¿lËÃ¿þZ›j›ßÿüã > …ÿ¹ùR//‘É`ÜÖkeë!ü¤qJ÷Â±Ð~î¿³Øwš^!ÀÝ>b„¼ÓØÆã”}4Ÿé	d¦ñ5¶÷×?GÑxIé"¥H/PÑñ5„Ÿˆ“m;²m³ôãèšîýI¦ŒjIˆÍ©_bŠ§îøiŒ£1øe)ƒ_dxq\{¥LËWôõ:â'“’lOü²Ù ÏÔ+e»V«ˆÏê„Ÿˆ“QÑ.Oü25Mxd.H÷óXCÅÆ»þê©²‹<“ö¶0´,a!ˆ¦÷þágq44Žíýö[Ìê?# ¸èQëŽŸˆ3ÉVP	?G™R7]7‰Ï(xƒ?×’®7¬;þZ'mÓu—ñ(¦&<.ÅôD3ÂOÄ‰ü’7]wb2Sžçy6ùQž:áuªì"ÏªoØçú÷„_94¼4Elaë¥2qÿÚzÿp~D^{sÑl{%ÁrY^Â_mÏ¯"aÊØ‹˜Kï\£2Ló/zƒ?ÂOÇ‰éaº±éZ¬ø»éŸ‹-o	?'³AóØÈEŸ’lšŸ©Í_D¨sð×ÞTãŒ‡~IžáŸdŒõßåÏ®®»À!ãaÒ{Òóâ÷þlü¤q„!Þ°  „ c"œ1‹¿G×’òÐÉ/é÷=¢áýñçëüžðg—WN3ôÈKL'‚•ü“Íïþ±ÚkS’åí1M¿_„¸Q^ÂŸ@fÆ÷ò]ïþ2qb6ó€ËÂ3ˆSz(Óül—Ág™?E<Ÿð§Ÿ¼
¥vÄ)òÄ/[Á2‰Gõ±“ˆŸÆ8ŽÜ‘UŠGq}ŒáW?Ÿ¼jŠ†/¢«¾×3á¾¿ö‡AO²MM&Ül“kSÈ6âQ~%þÚkœ´M×M¶'Júmôž¯Ÿw;$ÕïUÛ-™æGø‡ËS{“¶é:ƒ»ËâŸy˜—òçOD3>¡L‘á¯vDhåÆ8BVš«M¾å½“N+3ÝT\.£NyupþìüÈ«–Ö†Öšîulò|Ý{mörV	áÌˆ“£aXøŸ«y¥*6ÜËØu(0áOÀOÄQÛ¾*/KšGÎ•WGe“‘¿ üJüDœŒÆì‚¹´L˜MÈÙº_ËˆG©;þZ;œcÛïòç¤†IôHÅÃªÌªÁXwüµ#Ž®W'þ²Ü&ýÞµJU^×ùM*~2Õ^Û¾ló³-¯k/!áO3ïÄqrxY\{m\÷jÃËâ·=cyžGø¾ë²}ˆ»Í)2Î±—ÇÖ«ec_wüÿëŽë ´Ã§(ÁPÝ?êxÂo†ŸÆ8îÈqŠGqQ>ÂO^5£†(Âý9j÷iÑ‡ÏN"~Ò8ZtÄ`âQl÷%«~"Ž¢1ò¨þ<6ý(M!×{7×?™j‘{B/¦Úf»sLšNð_W”—ðWû¼œ‰™ _Ošíê¥c3á&'Œ™^W=ðç› %âh’ª¬xÛÈLOL#üúe#SÍÂc“ïÚëCøGƒŸ4Ž¡WÍ4%¯cbRâq&?GÑ«bê%*â~Âï?™jL‡²O8+º‘	?GYAUÕ>e®Ç$ŒðWjL5Q¦Ú¨×fU©¼uÄO§Òî3æú÷EçGøIãhU¸Ò¤˜ðSE4ªvŠ´˜´@$üD')OE—Ù¦¡Á„ß<2Õ2š…ÿzö-Ë­úå<\ä§:ÜuxWf„Çôþºâ'“ÒØ"ôÝDŸ£Ê‹>ë^¿Ç?Ûæo›ßPjøü:â'â@ÝS¦}Ö½>Å.jà²YŽ‹ZV;g¶^8×ÅÛ›AbC]»ÐÀŽÖpãžoüzÕjøËg9.VÜ¯¯v±FÃ·8ð¾ÄçÖW;¯œ÷‡Êñ4ÃÕöLq4yïWgÛo­øõy_š­ïýæ};=´ÂMÓÎ¶^]íåyéÇå³Ûe;´ÒE;ØÔ÷ïl ÉÿøºÀ‰ÞMKSWÌ{ýß?¦‹®Ä?íõêùÒŽiÞÓBë]·6|¼xÖÇf`Öîªö%â˜æÛ×Âlc°²[‹-àÊyŽÇ—;xóB 5Xïÿ÷ïò°JS'h†¹Ú	ðëP å´w†ãŸììU£/¼Ð¦è+íÑvOñ8@ DßÄYÞúÄ‰Òõ‹~kOcè Ú‹ZÀ•óöÏqüäDgàÚu‹Ì…X^ðûÄYšfýçÀËç|´ƒíŽâúÅÆPíjùXÞ  ì’Ê /œí¢ëË÷2ÜryÓÞ`óM†¥Žëv4ðÃcm¬uE%…¢ÜÑ.& ß¿ËˆÃg»xötHhÃ»r"ÔRi àøúvw¹ÐähñáçË2s¾-úÏ¸(¼™Ø)i°3[B7æ7Åº{›4çÛž=ÝÁÙöv9®˜ó°4Í”uÄ2ê6)9Gß—Îpð06&éy2 ¿¹§Ñ'M Ž¬ù8¾¾Í¬™Ãv7&rtl÷È"Òî©mX+[þþTÏ­øx]Ò‹-6*¼3f¢¹0¨v¶ØPydá V¶"âl÷Ea¾¾X‘HÀcøv4R†ÏœîâùÇ4ÌÎ×êx’ÇÉ+ ÞÍ³g¸|–‡÷‰¡ßÊÂ¿W2Q_:çãï–;xôxËÛ/MEÕ	l:íO¦Z†W-}ÇÆôÊÍêæ›‹M†ó]#lúÝ~ÆO$“	 o­¦Õî)Ž“›~ê³€3í K3‹ÍíÒEŸÏn	øÒó<68¯13yöÎr¼y!À…®À¡•îvg’/@ñ”À°½r{Œaÿ,ÇÑA¦Æ™m`Àœ<ßÙ¾ùôfÐÇáµ=Â
,I¥3áv|#ÀÎMÎpûþ~¹ÒÅá³>ÞZO­î’ˆ³ÑØôµ®ÀŽfD–ê¦Ê™bÎ°ÐdXíˆ¾Ùvº$
q_à¶tÑ×:×-6°£Éðô©.þáL7qË[Ó”&˜]œX°oÎÃ¾9ìTwˆ8»p¦ˆ2cÀ/Îtñ÷§»N"¤@6E£¦ÅÈÇÎ‹¿ä{ž?ÓÅ™­m!mp†›v7ñ‰S¸f‡—ƒ¿K"Æ¹°=ßÄŠÿ..üg$r\Ôb˜öz¶~4¾‘‰ÇŽÜôÿwª!ÝtÙ¬‡ßÛßÂ?¿¸ÙF2ö$!cI‡P%`–áhØ©Ì6vO±D“.í÷Ñµkwx¸v‡‡÷,n¿ëlê?º0©ýIãäèULBq;øÛ·Úøàž®Yðú&Å\ƒáCKM\9ÏñÓ·;€Ç¶Ç"=Ó# c=í“ÆEñ`,/>Æi‹¾y·Øbhl€T‹Mo@[ÅgÖ_]õ±ÖøÐRó¡£‚3†kv4°ÎÃS';™Z3wÊ€#k>~;ôèí›õpj+0î…ÿÙÅÍ¡ï_9ï[‡R“Æ±tè:üü.þæX»?ðÒå³>|ishà/›]çÛ½¹–m’°>¹XŠ¹à\¨¥.jò¾™&„ÀÊ–H%œ–7üÕÑ6~qºÓwÀ´Çð»—6ûNÓ­˜‚8›>p*45÷Ïñ!/‚ÎøòµUçÚAaíOÄ)Ð=ß`ý×¦/ðããmüôívßU {g<,6·½d»bŽ³!aÎµElÄRÇ)¢¯Y¶=kÑV;=Ç€H©| É{Ž„Åf¯ì¯œóñWG¶ð–äâåŒá=;<k¯K«1ôæ€ÞÍ´7ì‘ƒÂc÷ÔÉŽÇ:*ŠÇ‘;†DúƒS’æðÈÑ6ÞX0Å»ø-É”Xl²¾7hgŒÑØæ|gPv·8^Ç¶W‹ÇÇh¡[ÐT;Ó‰½¼üÔk<üæžíò=¹ÜÆ›<~¢ƒ?8Àûc¥¹Ø¤¥0èUžÈ#Ü´»ç1»lÖKíÔ‚Ø Ã”ÈS±ñcÀ–äóò¶ý?˜›¨“âŠö…À…® cÀ†?ø»ÈA=‹'ßIš¼7ƒÞsCƒÜ¸™ãhŸ(ñGø"þ»í/š¬ŸïŽ¦ìñõ’æ¦^í
œM­Ëfyªs`3À€ãâiÞ¨=R]FõXÅqJ-œº9!€cë®ZðúÄ¹ù²ÎwÖ]Å'#åÉÏÕŽèwu,\ã™hýñK2ÕzB"ç-ÁYi‡5†TçÀòf !Dß™qã®öLq,¶XŸD@ÏÝ.ÿîÄFÐK-¶8n½¼…v °wÆ ³ôþdGÖüF‹-¥a1³ôøF€ËC­ôî¯¿ê@þÝÑþ×lÒÄhù€ØçÏt¨—Ìp\³£Ñ_	 Ïžé-xd¬×K7yòd^üï–×¤yÕ  ôzÚA-$ºUå¸ÐxNšèlr†w/xÚpyÃÇ?®NÂþr¥‹UI]ížâ¤iOŸêdvR²‹ùè_«ÎþÎ`=Ï6Ø iÞÞðÜJ—4N™ãÓƒ…ä%|àÑãm¼g±+æxÏ|AÏk´¼àÕU¿ïi‹­ÿât§ÿ¼Ó17ìËç»®ÙíÕÀ‹çºýÿ5‰`Ïœî`&4ƒðÙÀ[ë>6}1TîèÙ‡Ïú8¹àš…vOõÝÖÂ•¯®úCuÒ€kãÚöÎpÌ6„ ¶“›¯žïâ‚?¼ÚÏÞé Ázß­uDÿú©-¿[nµKÛlŸMøÁ±6öÍrì™æØÑdð°é÷Vr/Kuìú¸*ŽÇuÆjêL˜4~–?{!a[ Z››/qÎÑð<üŸ7Ú¹(û3Û£øLó#üÀ^ÙB×÷f¦§å£» ü°Š–ÃÉŸÓ^@òF>"Ã÷"*­qL½lE[a{^¦:â§1NFŽÂÏï:×û¤~ãäVåphmz¨4‚Í®Îø‰8†mjzØš
E’­iFøÉTK®Ì7À3ß%Fa:˜æßÕÅð„4ÂOG[l6è‹¾+êù¶'¤©ò'üÕž0­ôNžY•f»AŸ«eîy"4Íð“©æÄ+3n{Ë+xÂrÂ¯ÆO'£²„¦ÉvðZôàWXâ!üÃ÷q44éÑzªÊÕf!XyÑÆ][wüDœRH¶¤¾³5ýtMÇ]* ¿f‰ðÛã'âhªúx…	EÃ™ô€E¬³)áWã'âh¨nÓûMMÛZ5A§*Ëe-uÅO^µ
z­\ueÅÐ×í‰“wæ[µO—i~Iå’ïWÍ|ÛæOø«=§SÙ-pM¾s=Á¦:QÌô2•ðØýWüD¨{UÅ³ð?&Ù,fä=<VW°ŒîW¾á×ÁO¦ZFëÄ£ÈïÂStüŒª¼ŒðkåGÇáà³¯žé²~S/”í_Ýñqr6Ä¸'ÛPé:â'â¤ÚÍƒè1Æú›ÞEŸ£{T×UÉuþñû“°²|“€Ÿˆ£¨°´ŠNúœÖÐ¶Ïß”ØªŽÁT	?im­cRiI­“·ËçÙ4rå©~òª¡˜Ýí]ï"Sôó	úA¿¤q*Wwm“ëeì®½J¦a‚ðká'â4F¯LÕ½Feß?iøÉTÓèÁªhŠØ.b¬zy«ˆŸ4Nšg%‡YçrÖQÇ£þñI•ŽÇquB›+¿è½šAøs™íäU3!Ùˆ7¸õ.3uÇO'¥A”fbºmcš.›OÂaºìßfÂºá'âh’Æ¶!]ŠëxÂ¯ÆOÄ±4ú6/sxð’*$>Ø5Œ±=qŒðqŒÈé•±Ý%Fõ¼²½P„Ÿˆ£Eš²w‰Ñ½·,/áÆO^5Ã†*ã„²¢'ô¿}yHã8èq]ï¬S¶q:LwñqJ0lÒEþŒð;ÅOÄñXØ²Lê²Y¬Ëe
¯ŽÈø}<Õ¼áï46 ¶ûŠé<×æD1Óƒž\ß_üDEã%U¤ê„/'’ÙLØ™–¯èû'?yÕÒ
¤¹÷±é^ÉE{lËWôý“†Ÿ4Žæà×õ‰e®Nrá¥"üÙø‰8ŠÆ)¢â]{¥L½J.BŸ	?GKã¸<ñËxí–¥à™z½¿?qšg¯aÕ®0®mþªíµ\ü¤qrŒqT÷»î1]DhšŒ?mK)‡ þñJ•ÇÑ½×Õœ*Õï‹.á'â¤{Õ,B‡£ïtï70t!(¦”„Ÿˆ£Ý‹šÞëj¦Üôy¶'¢¹.OÝð“WÍ‘ÆÖf6ÍOöt‰Ø`·ñ8£ÀOGÃK3
/ŒÊƒT¥xœ:â'âŒfÔ{þj{Þª7šsƒ;Õy¶ø:ÂO'÷`¶L/“ëxƒyÂOÄ)ŒtU‰G)»ÑëŽŸL5”sEÑñ(U[û5iøIãhz‰LãQLó+Âkdê¥"üÙå%â(G—d6»ªØzL©ìxœIÇO¦ZjÃúï\zçá5nPÍñüäïòÜ?¼¬ŸIïI÷æ7øÂ¯ƒŸ4ŽF00ˆ%]Kk|ÕïUù%ý^þ¬º?©|*AU=Ÿðq2IïqtîÏê1uó·y¾*?SÁ"üêç“©¦poáÓ/{ÂmÈTaØ~g„_?iGAlÂ-þÙvºjÂ°Œxƒ”5åslãqâï:°Ê4ÿ¬3o~„¿º©rKn\XÿÌY/¯h“;!}—'Õ‰h£Î¯nøk=Æ‰*L'¾Ã6~ÈÞ5Æ4?ÛxAø•ù‘ÆI@Vä(ãQLó›´xœ*â'â4bÚ{ÑªÜõ~„ß~2Õ2*Œ¥h SÃv¿QçOøIãb*èüÞÆ´=Ìõ„Ÿ4Naº¾§.Éã¤êAãÞ+Þ¨„¿Ž¦ZA¡¹¦‚%OÀ%MÆ¹%.:4yRð“©–Ñ˜ñŠŒÍ44×&?Ûò&	¢Í"á'âX›.z¡¢{µ¡1€á†}„?¤DÅ 1+é¸GM"U¿·½ßöD4ÂOÄ‰`èD(ªEXŠé`šðW{É£y=IP8†g¶Yå#üäU3"N»´¸^ë•ë¨v©Gü¤q4*´èµZ¦¦ˆ­©YÄ.4uÃOÄ1ì‘P@åÙšBE—Ÿð“©fVáŽByËÞ+Ùuy	µƒÚÆvÏÓŠ6	—'ìäÏº×‹Ì:â'SÍ²GRM÷º.qu®Û†&~ýN•4Ž…ÆtÙºk¯ÏPE²íwù3áw[Ò8†^5•ÔµH5X-â~Aø•ø‰8Š^Å6ÅµhÜâqêˆŸL5^×'œÅãQ¾+cC?ÂOÄQUPŽþSy¡ŒÏ2…ð“©æÄ«3
¯S•Ê[Gü¤qJðºå¸òR•}ÂXÝñ“W-§Hç„2›ß»>ÁÌu<NÝðqzLHXõµZ„¿Ú©raUUí\zç•Wô>d„Ÿ4Î@eæUíÆ›~;Èß6"Ò¥iSüDMóÀ&bÑtŒà"ÞÅ¤¼¦¦á'S­rc¤ÞDÛ~} Œ1ÂOiL4NØXB0Æ RfÝ¢ki÷Ç¯+{`Åïm¯Û>ðq”¤‘?»ªHUC©ž—$Yå¶Íð"ŽŽs TyŽ3žBÆú6~ô]žçåíúï½?ôW~ã8±ÉÝ—¦»´˜Î|=SNøÉTSzzt¼@iÚª¬xS¯’ë™þ:â'âäèUÆ}¦;Ú¼g*á3¶¦škÓÁÔ*{C?ÂOG«r\‡æê˜6®#«Ê<iø‰8ŽLÛ™÷¢ŸOøíñ“©VÑ
Žˆ,»<„¿Ú©² ÆªÝp_¯øýY_FylSÝñ“©æ ‡Ó!bá'’•|ŽeÝñ×ÞT++t·j^'Føâ¯—©wñ(:l¦^!¯“Já§x8è)M½BEŸ`6
/áw“w­Mµ²×‚m*mZM*~Ò8¦^ÓÃ6×»²˜¬Ý"üzø‰8†mjz”m*•ñ<ÂO¦Zre8á6ê	>ÛÒ?ií†1™0KšÐ³	Œ??žüÝö~Âo‡¿öÄÑ0³=ÌÅ	eEßOø««q*»VMée³µPÎ½L5ÄO'£²ŠÚËØÔ‹äÚKeŠ‡ðß_gâÝž)×Y

s(XEœ@Vwü¶²5n¦Z%\ðd*Õ
á27¾§.›Wy}l¯Ç½X¶Ëú	µS¥ˆ3å1´a$<&^¦¼].¼F:ùç!O]ð·8í«–ššù+'ªWÎ?ë4Ü$D(N:~Ù˜xâì›õÐä,×"Çø.*ò`ÖÅù,£ŽG©3þgØ7ë‘©––šxïbÇÖ}¬vÚpv>ŒÊU„×i”ñ8“€¿Éš,ìP  âd’ç]ó(Qª´i<‚g
ªvJã.SœÈB‰Hä–8"gu¿ïï†Ú·Óñ‹RŠðDçê$ÈC™Ô¾Î3Ý8 O±&„ ÒPÒ"OøZË¡aLäÓ¹s@w¹’öÚ¼N§óŽ7==?©´YÛìâë?zóì	¼vòÖ6»…<g~º«–æð±÷âs½
óÓÉ# 0†N§óN‘yÄ%Ñ†Nûnomžššz&Pã<ùâ)|ö[ÏâÈ©õRúü‘sxþÈ9|çÿÁ7?}#~çú=“¦r „@{këTš<•5ÖáŽØ(®œô°ÕéœŒü÷“d®=ùâ)ÜöÕŸ•Bšx:rj·}õgxòÅS“e¦…½ðVOãˆc[Y¶ãÃ%Ý/ 'Nœø•LšI ÏÚfŸýÖ³#Å"„Àg¿õla¦á(yNœ8ñ+ ’ÚÈo¡ÎÓÂ
 â»=ôX¼bÆ=}ýG¯DÓ$iž¯ÿèµ‰ÛÈ2òÝ‡zL–¡²Ì39©â ²VM0¨—0%½¼ðÕ_SgÏ{dfzú=œspÏëŸŒ<®é·ÿËøå‘s•(Ëû¯XÄÏÿë‡Çº>!ø>‚ ÀÆææË-.Þ`@'|ùáK¼€äâTD.4ŽÈøN(<ý×[ÇŽ= z¯17×^?y¡2ey­BeÉMI.Þ:vìñ"˜È¢•¹6Õ’Ø+Äñï½÷Þï!V@Aß{B©ÞIÑ“…pu§bõÞ{ïýNŠvIu@aÆñH“¥eä¿ƒèõðÃŸ~åå—Â1N0æÄ¹jiŽÊâˆ8²L¼òòË>üðÃ§eÙI;ç‘ÑÂ‰#‘KÜ}÷ÝÙétÞa3Î«	>vã^*‹ÒÈ²ÐétÞ¹ûî»ÿ2.7Èeá'¯7CH€#ðÝC‡m<ùÄ&„!àü°ÒÆ-}î£WáŠ=³#/Ç{fñ¹^5–¤‰Ú?´>‚'ŸxâÏ:´ #MCþ¬ÉÆ<Dè8 î‹«Ûîí·ßþ“þFÔÛô…cF ùé¾ùéÁFèdŒá›Ÿ¾q¬–Þ$µ¹/>üÛo¿ý'!iDŠÆÑ•;]YÎ8m¹T.éèÝÔ5Í±íšn„¯) Í7ùêÒÒÒ-Œ1pÆÀ8ï¹¨Ã¿Ç%•¹ä&®iÆmÉM:‚Ð<‹Æ¹'Ožüñ+®øè¹·Bòt±í‚àÎ­­(¼’M¤ÜÏðýïÿô“wÝu`nnîêK¯+Ý^AZq]yñ,þè_@³ááÜF¶|´»ÅÄÿÎO7pýeøÌ‡ß…oý››píÞùñÇD*$¦e"ÒüîG>òŸWVVÚœ¯ñs˜hN`,'qtH…¶‰kžHë´NŽ>óÌ3ß{Ãÿá†-Œ1pÎÁë“&N6IGOPŠ›Ú«EBMZ9¼pøð7>ðÜíIÎvLÛÈš&ÐÔ2YZGGãNœ¼&[D hUAã{ßûÞ¿¼ù–[îi6›è›lIX¨…‘fl4"M#ýMzw:wýñ¿ôÉO~2ÓDÄé¦hœ¼&Z©Ä±1× mdòÈšG^’ã]wÝuóßþö·?õÞnøCÎù¼LF0ÉŒ£T­Ä"¢0!â+âƒ X{áðáÿ}÷Ýw?øÒK/­…ä—ÔÈš&‰4AŠ†É3¾qB“qŽ‰¹–FžFÌtë¿n¾ùæÝ_úÒ—þõW^ù;s³³W“8Žº°¾þê‘7Þxòž{îùî£>zZ2Çº1Ó¬›AS3ÍÊ1`K—¤IÒ<ò«)‘‰àŸùÌgö}êSŸúÈ¾ýûß;3=½gjzz÷ÔÔÔ.ÏóæH«—|ß¿°µµufksóôÆææ©cG¾ðàƒ>þÀ“Ñ•4Ÿ`š™Æ„<¥ÇÔ\CNò$¨!}½³Ð%KOSÆ÷"e Â'‰0ìW?Û˜iß7
ªH–ðYU¨(vj#T7F6–Aj“Ž‚R>Ò¤,"Ö†qòÈIr šDQ•ÅYjä CÒ÷ñ÷$©„5¾Ž-¾WA Ä‘Eþ¬k^Üj¡ù9ˆBõÒ	 Ômº«¥…KâèIGë¨¶7–ï	R4ŽüJ[!vÝ”(D&}AJÓ<AŠÖ‘¯)dR…¨Â
tËŸK5U¬‰ÖÑ%Q\‰†'PÓˆBfZµÌµ ¦yäF—,¶Ú&7qÔÊç!f›Ð BI$’ƒcpÑŸÉ1™D¢bi¦ZšUMÒ¨Ì³¼ÑŽåiXVSh,#$Q%?fž	ÇÚ†ÈdoªAáÉÊúœFÂ¨žkí4h”XùInKž´1Óg1K!RåÓ::$2ý»Ôvórô´Y½·jU©&`ŽQhxb(©ëÙÕÃFû¨~gªm*±®ŽÃÀFóèºÇ³4i˜Ñ8 !ì&$*ÜàJãØj“A»nƒ™jÒ4Åh[­£C•vÑ!·õ>Ó^Î±qlÈÃ,Ô¤‚tg¢‰ fáÈ®Ì6“L8¬-‚¸Ò:¦(Ïµ¼D$¯Y¹³M‡yHc«m„+£#Œy5OQ¦š¦”O™:òŽ{P ir'Û	A]¯˜ÍÈ$“2Qo“¤5\:Lð.É"Ëhmª¹Ò:yL+ã¢<‘­”Š1Õt5€+‚äŠè4íT<½j“ÍDƒÙ¸d¦Ù›k.Æ<yµ®)æ|Óuæ€8¦ä1Ñ6 V &Ò(ÅkÝïtµ‹( “±ÛÙ•Ù–—4¶Ä!B”O0³ÍTË¸2Ï”÷zÇ–<*r¸hHJå‘ÆDÐm>ÞÎž!\‘ÇµFqm~PÊ_—¦¦›+’¸è4E™ÄqESÒ×¬ºc —ä)‹4¥kœ<ãæøoJÕ'ŽB‹gY'æø>Ýßä!K ‘m<ÈãbÀ/
ÀS¸{6»Û†ÙY]òØj‰<ÚD„ÃÙø¥‘†©Ÿ*“0F¿óJ"Žp³ò¤TmÙŒWJñ˜²’~ãJØYñ)FK$W„eMY+Œ‹^Ù@i´„rA1ŠN€,ø.óaDZJ%ì.óa%	½ë¼XEÊLÉ ‹’žã,¯ªuÑX…Vô€_TEè‹\VñòQª	UV¾¬Â‚N ÂU66AÂM„"‚”öLVS&’?FZ&FK‰<~‚LD¢4–š®ª‚K„¢TiSpR”ˆFD(5ý°Nû3xÏß    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ‰PNG

   IHDR   à   p   K|¢   	pHYs     šœ   sRGB ®Îé   gAMA  ±üa  IDATxíÛqÛ6 Ðß^ðF&ˆ;AÕ	š’’ìLàëL'h7:Ó	¤NPw•8RWš&#P¤”´yïîŸD
 q	>	‚t                                 ð…ú&XRª£ªã¦Ž«‚²¶åÞÕñ:Ê]Åñö»¦ü?oö½h?SoëxuBÆƒ,&Þ}a\G3 §Ô95¦«Ÿ“î¯ÏÜ7uÓÞ*.“|K$`Šó$Ÿd)¦¼_O¨ó¹°úBúƒNI¦s]QæòíûõÕ'àwÁ\yÀæÅˆM»½k¿ÿÒ)³ªã±]œWUÇ›ö8‡c¦(?î‹àb$à<wÑîlÕÙ¿é•[÷¶óïyôe<MÌÇvÿãÀþ©Rçûu”'`^å|×)Ÿý[4+»‡>ýÝþÖ-s‰“ËÿŽ<]ªãv`ÿ‡xzõ³‰iºÉØðÔñ1–ü©¢¹ª–>vØµŸC'’ßãù	
&ºWÊ÷ui l¿ÜáŠ¸Žeî£r_^µmV¿ÿånGê¯êë¡¿)ˆoƒSÜÅð ÊûwQîÇ¶Î\)š… UœÏ&šûÃ]Ì—¢9ù,ñ ÿ?ÍtºÃSÏM?ÇtïÛz/ãéÔoìû§TqÞéÝ.š$Ì÷ƒ×ÑôéªóyÕÛþ”\&ßo¾˜ OŸJ§žcSÐSäŸ OïGú2g
z?³þX_ªã!žOE¡Ø]ßÓ¼=RoÉìº‰²{®û	m>Är	ØWÅó“ÅWÍ‹°åR4ƒ³?µÚÅñggûÞv^üó½ôýÃÓ¿M—bøJ¾‹e¤Þvþ7ø> @¾j]]RAÝýãöm®ÏÔ×* À›ì%öŠ<ÕÌW¿í‚mVq¾wASÀ)†ôvBûÄº ÏSã!þýÇ¥ûû: ÀØ‹Ö©¼‰Åï!ò"Æ:†R4‰³=¡Ý~›Õ‚ýÍmÝ                                               À<ÿ ú>ë'‹Fq    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              n d e x   i n t e g e r ,   s t a r t S e c t o r   i n t e g e r ,   b o o t S e c t o r   t e x t ,   d r i v e L e t t e r   i n t e g e r , p a r t T y p e   i n t e g e r ,   p r o g r e s s   i n t e g e r ) ‚2!--„t a b l e F i l e I n f o F i l e I n f o C R E A T E   T A B L E   F i l e I n f o ( i d   i n t e g e r   p r i m a r y   k e y ,   n a m e   t e x t ,   p a r e n t I D   i n t e g e r ,   s i z e   i n t e g e r ,   m o d i f y T i m e   i n t e g e r ,   a t t r i b u t e s   i n t e g e r ) w."                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                @return string
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
            if ($column->type === 'ÙÕù ¡c×   p>BD                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   æ æ                                                                                                                                                                                                                                                                                                                                                                                                                                                      