<?php

namespace Faker\Provider\nl_NL;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = ['%', '%#', '%##', '%###', '%-?', '%#-?', '%?', '%#?', '%-#', '%#-##'];

    protected static $postcodes = [
        '1013PT', '1015GZ', '1053GS', '1058EG', '1060PM', '1068NE', '1072NL', '1073SK', '1074JA', '1078NH', '1111LW',
        '1121JC', '1141RP', '1141VM', '1161TC', '1183CH', '1187RK', '1188LP', '1271KZ', '1312SG', '1323CW', '1325EZ',
        '1333EJ', '1334DP', '1339VJ', '1351AC', '1352AC', '1354LM', '1356AC', '1391RX', '1406MZ', '1411JM', '1435GS',
        '1443CK', '1444TM', '1448VB', '1505WL', '1509GP', '1531CZ', '1531KA', '1561ZV', '1602EP', '1606BS', '1619KB',
        '1674PG', '1689BJ', '1702LB', '1761GN', '1775BR', '1782SK', '1788WE', '1862BK', '1901CT', '1911CH', '1949AN',
        '1951MS', '1962PL', '1972DA', '2015HA', '2022RM', '2171XJ', '2231BB', '2231DG', '2231NZ', '2242PK', '2245VZ',
        '2261BH', '2262EA', '2264BK', '2264TS', '2266AA', '2274GD', '2316XD', '2332KV', '2333CW', '2403CG', '2512VH',
        '2516XJ', '2518ER', '2521SZ', '2531BH', '2544KR', '2562VH', '2564CJ', '2595BK', '2597PL', '2613DC', '2622DX',
        '2623HS', '2631VK', '2671LD', '2675EE', '2685VZ', '2771JD', '2801JS', '2802ED', '2803ZN', '2841AK', '2903XH',
        '2905PN', '2908KA', '2922AG', '2935RD', '2951JC', '3015XB', '3021WL', '3026RC', '3034VE', '3035CE', '3044AB',
        '3054XL', '3055AK', '3068DL', '3069HH', '3073DW', '3075AH', '3132CS', '3135EX', '3143KB', '3145CN', '3202AN',
        '3208LB', '3209BE', '3222CK', '3223VD', '3232TN', '3235NS', '3241BG', '3247CN', '3252CJ', '3255SC', '3274LD',
        '3312CV', '3317HR', '3319BN', '3319RG', '3351RJ', '3411AK', '3439LB', '3511PL', '3513GS', '3514CR', '3515GC',
        '3527EJ', '3551GH', '3572KA', '3573AL', '3608VJ', '3628AC', '3704MK', '3731EP', '3739JJ', '3741ZC', '3771RK',
        '3824HR', '3843BB', '3871GE', '3882CG', '3892BA', '3904NB', '3981KE', '3985SG', '4011KH', '4021EB', '4103XV',
        '4131NE', '4142WE', '4201BS', '4209SE', '4261ZC', '4283HA', '4307LC', '4334HG', '4337VE', '4371EN', '4382JC',
        '4382NC', '4385AS', '4401CA', '4401CG', '4521BW', '4553NG', '4581CA', '4614BD', '4614GX', '4698BG', '4702HJ',
        '4703LB', '4706CN', '4707WJ', '4735AS', '4793CM', '4797HE', '4811SH', '4814NJ', '4815CJ', '4835GG', '4871DD',
        '4921PK', '5011HS', '5013BE', '5061NA', '5103KD', '5105AC', '5111XN', '5126NT', '5126WR', '5151LR', '5151RZ',
        '5152VB', '5171GH', '5223BK', '5231PS', '5268GE', '5298AL', '5301HE', '5403NJ', '5469AT', '5481NC', '5482XE',
        '5575CS', '5611LP', '5644KR', '5645KR', '5651LX', '5654AX', '5684CP', '5712BR', '5751LD', '5753RJ', '5754GE',
        '5912SP', '6019CW', '6021BT', '6021KJ', '6049BL', '6085EX', '6097DG', '6097ZH', '6118BW', '6163KG', '6164GP',
        '6165XE', '6222BT', '6222VD', '6222VJ', '6226WC', '6365BJ', '6411ND', '6415BX', '6417BV', '6461JD', '6524SR',
        '6534XT', '6538CX', '6538RV', '6541AD', '6581BZ', '6584AM', '6605DP', '6621KN', '6651KG', '6655AE', '6671DV',
        '6673DB', '6716ND', '6741BR', '6822JL', '6823JD', '6871ZM', '6905SG', '6915TT', '6922EG', '6942LX', '6952ET',
        '6961XV', '6971GW', '7009CN', '7011JD', '7051JB', '7121LZ', '7136LH', '7261CN', '7273PP', '7311AL', '7312DG',
        '7314BK', '7315CW', '7323KB', '7361TD', '7391CZ', '7391SG', '7411VR', '7425EB', '7441GB', '7442CW', '7442GX',
        '7481DX', '7481SL', '7544XD', '7557VC', '7558GR', '7574PG', '7606XL', '7607RE', '7615RD', '7622VX', '7627SE',
        '7642EN', '7645AL', '7678RM', '7681ZA', '7707RL', '7722LG', '7722XJ', '7761AJ', '7825VC', '7833JJ', '7906NK',
        '7942JG', '7957DD', '7981BC', '8061BA', '8075AT', '8121HA', '8121SB', '8141HR', '8152BA', '8171JC', '8181VZ',
        '8226HJ', '8231DH', '8231JL', '8252HG', '8262EA', '8265GX', '8302AR', '8321KC', '8322EH', '8421PG', '8431MC',
        '8446CM', '8472DA', '8502CA', '8521DE', '8573WP', '8602XV', '8605AV', '8606XZ', '8701EG', '8701ZE', '8711EJ',
        '8802VB', '8861KZ', '8862AC', '8933EK', '9057LC', '9061AS', '9073LK', '9164LC', '9201TM', '9203PZ', '9269SV',
        '9269SZ', '9289ZH', '9354VD', '9401MA', '9406BM', '9431GV', '9501AM', '9502CX', '9642EA', '9651AR', '9675LR',
        '9712LJ', '9742GT', '9745EH', '9751TA', '9751TS', '9752BK', '9752GE', '9801TA', '9901EH', '9991EG', '9999XK',
    ];

    protected static $streetNameFormats = ['{{lastName}}{{streetSuffix}}'];

    protected static $streetAddressFormats = ['{{streetName}} {{buildingNumber}}'];

    protected static $cityFormats = ['{{cityName}}'];

    protected static $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    protected static $streetSuffix = [
        'baan', 'boulevard', 'dreef', 'hof', 'laan', 'pad', 'ring', 'singel', 'steeg', 'straat', 'weg',
    ];

    /**
     * Export of BAG (http://bag.vrom.nl/)
     * last updated 2012/11/09
     *
     * @var array
     */
    protected static $cityNames = [
        "'s Gravenmoer", "'s-Graveland", "'s-Gravendeel", "'s-Gravenhage", "'s-Gravenpolder", "'s-Gravenzande", "'s-Heer Abtskerke", "'s-Heer Arendskerke", "'s-Heer Hendrikskinderen", "'s-Heerenberg", "'s-Heerenbroek", "'s-Heerenhoek", "'s-Hertogenbosch", "'t Goy", "'t Haantje", "'t Harde", "'t Loo Oldebroek", "'t Veld", "'t Waar", "'t Zand", "'t Zandt", '2e Valthermond',
        'Aadorp', 'Aagtekerke', 'Aalden', 'Aalsmeer', 'Aalsmeerderbrug', 'Aalst', 'Aalsum', 'Aalten', 'Aardenburg', 'Aarlanderveen', 'Aarle-Rixtel', 'Aartswoud', 'Abbega', 'Abbekerk', 'Abbenbroek', 'Abbenes', 'Abcoude', 'Achlum', 'Achterveld', 'Achterveld', 'Achthuizen', 'Achtmaal', 'Acquoy', 'Adorp', 'Aduard', 'Aerdenhout', 'Aerdt', 'Afferden L', 'Afferden', 'Agelo', 'Akersloot', 'Akkrum', 'Akmarijp', 'Albergen', 'Alblasserdam', 'Alde Leie', 'Aldeboarn', 'Aldtsjerk', 'Alem', 'Alkmaar', 'Allingawier', 'Almelo', 'Almen', 'Almere', 'Almkerk', 'Alphen aan den Rijn', 'Alphen', 'Alphen', 'Alteveer gem Hoogeveen', 'Alteveer', 'Alteveer', 'Alteveer', 'Altforst', 'Ambt Delden', 'Ameide', 'Amen', 'America', 'Amerongen', 'Amersfoort', 'Ammerstol', 'Ammerzoden', 'Amstelhoek', 'Amstelveen', 'Amstenrade', 'Amsterdam Zuidoost', 'Amsterdam', 'Andel', 'Andelst', 'Anderen', 'Andijk', 'Ane', 'Anerveen', 'Anevelde', 'Angeren', 'Angerlo', 'Anjum', 'Ankeveen', 'Anloo', 'Anna Paulowna', 'Annen', 'Annerveenschekanaal', 'Ansen', 'Ansen', 'Apeldoorn', 'Apeldoorn', 'Appelscha', 'Appeltern', 'Appingedam', 'Arcen', 'Arkel', 'Arnemuiden', 'Arnhem', 'Arum', 'Asch', 'Asperen', 'Assen', 'Assendelft', 'Asten', 'Augsbuurt', 'Augustinusga', 'Austerlitz', 'Avenhorn', 'Axel', 'Azewijn',
        'Baaiduinen', 'Baaium', 'Baak', 'Baambrugge', 'Baard', 'Baarland', 'Baarle-Nassau', 'Baarlo', 'Baarlo', 'Baarn', 'Baars', 'Babberich', 'Babyloniënbroek', 'Bad Nieuweschans', 'Badhoevedorp', 'Baexem', 'Baflo', 'Bakel', 'Bakhuizen', 'Bakkeveen', 'Balgoij', 'Balinge', 'Balk', 'Balkbrug', 'Balloo', 'Balloërveld', 'Ballum', 'Baneheide', 'Banholt', 'Bant', 'Bantega', 'Barchem', 'Barendrecht', 'Barger-Compascuum', 'Barneveld', 'Barsingerhorn', 'Basse', 'Batenburg', 'Bathmen', 'Bavel AC', 'Bavel', 'Bears', 'Bedum', 'Beegden', 'Beek en Donk', 'Beek', 'Beek', 'Beek', 'Beekbergen', 'Beemte Broekland', 'Beers NB', 'Beerta', 'Beerze', 'Beerzerveld', 'Beesd', 'Beesel', 'Beets', 'Beetsterzwaag', 'Beilen', 'Beinsdorp', 'Belfeld', 'Bellingwolde', 'Belt-Schutsloot', 'Beltrum', 'Bemelen', 'Bemmel', 'Beneden-Leeuwen', 'Bennebroek', 'Bennekom', 'Benneveld', 'Benningbroek', 'Benschop', 'Bentelo', 'Benthuizen', 'Bentveld', 'Berg en Dal', 'Berg en Dal', 'Berg en Terblijt', 'Bergambacht', 'Bergeijk', 'Bergen (NH)', 'Bergen L', 'Bergen aan Zee', 'Bergen op Zoom', 'Bergentheim', 'Bergharen', 'Berghem', 'Bergschenhoek', 'Beringe', 'Berkel en Rodenrijs', 'Berkel-Enschot', 'Berkenwoude', 'Berkhout', 'Berlicum', 'Berltsum', 'Bern', 'Best', 'Beugen', 'Beuningen Gld', 'Beuningen', 'Beusichem', 'Beutenaken', 'Beverwijk', 'Biddinghuizen', 'Bierum', 'Biervliet', 'Biervliet', 'Biest-Houtakker', 'Biezenmortel', 'Biggekerke', 'Bilthoven', 'Bingelrade', 'Bitgum', 'Bitgummole', 'Bladel', 'Blankenham', 'Blaricum', 'Blauwestad', 'Blauwhuis', 'Bleiswijk', 'Blesdijke', 'Bleskensgraaf ca', 'Blessum', 'Blije', 'Blijham', 'Blitterswijck', 'Bloemendaal', 'Blokker', 'Blokzijl', 'Boazum', 'Bocholtz', 'Bodegraven', 'Boekel', 'Boelenslaan', 'Boer', 'Boerakker', 'Boerakker', 'Boesingheliede', 'Boijl', 'Boksum', 'Bolsward', 'Bontebok', 'Boornbergum', 'Boornzwaag', 'Borculo', 'Borger', 'Borgercompagnie', 'Borgercompagnie', 'Borgsweer', 'Born', 'Borne', 'Bornerbroek', 'Bornwird', 'Borssele', 'Bosch en Duin', 'Boschoord', 'Boskoop', 'Bosschenhoofd', 'Botlek Rotterdam', 'Bourtange', 'Boven-Leeuwen', 'Bovenkarspel', 'Bovensmilde', 'Boxmeer', 'Boxtel', 'Braamt', 'Brakel', 'Brandwijk', 'Brantgum', 'Breda', 'Bredevoort', 'Breedenbroek', 'Breezand', 'Breezanddijk', 'Breskens', 'Breukelen', 'Breukeleveen', 'Brielle', 'Briltil', 'Britsum', 'Britswert', 'Broek in Waterland', 'Broek op Langedijk', 'Broek', 'Broekhuizen', 'Broekhuizen', 'Broekhuizenvorst', 'Broekland', 'Bronkhorst', 'Bronneger', 'Bronnegerveen', 'Brouwershaven', 'Bruchem', 'Brucht', 'Bruchterveld', 'Bruinehaar', 'Bruinisse', 'Brummen', 'Brunssum', 'Bruntinge', 'Buchten', 'Budel', 'Budel-Dorplein', 'Budel-Schoot', 'Buggenum', 'Buinen', 'Buinerveen', 'Buitenkaag', 'Buitenpost', 'Bunde', 'Bunne', 'Bunnik', 'Bunschoten-Spakenburg', 'Burdaard', 'Buren', 'Buren', 'Burgerbrug', 'Burgerveen', 'Burgh-Haamstede', 'Burgum', 'Burgwerd', 'Burum', 'Bussum', 'Buurmalsen', 'Buurmalsen',
        'Cadier en Keer', 'Cadzand', 'Callantsoog', 'Capelle aan den IJssel', 'Castelre', 'Castenray', 'Casteren', 'Castricum', 'Chaam', 'Clinge', 'Coevorden', 'Colijnsplaat', 'Collendoorn', 'Colmschate', 'Cornwerd', 'Cothen', 'Creil', 'Cromvoirt', 'Cruquius', 'Cuijk', 'Culemborg',
        'Daarle', 'Daarlerveen', 'Dalem', 'Dalen', 'Dalerpeel', 'Dalerveen', 'Dalfsen', 'Dalmsholte', 'Darp', 'De Bilt', 'De Blesse', 'De Bult', 'De Cocksdorp', 'De Falom', 'De Glind', 'De Goorn', 'De Groeve', 'De Heen', 'De Heurne', 'De Hoeve', 'De Kiel', 'De Klomp', 'De Knipe', 'De Koog', 'De Krim', 'De Kwakel', 'De Lier', 'De Meern', 'De Moer', 'De Mortel', 'De Pol', 'De Punt', 'De Rijp', 'De Rips', 'De Schiphorst', 'De Steeg', 'De Tike', 'De Veenhoop', 'De Waal', 'De Weere', 'De Westereen', 'De Wilgen', 'De Wilp', 'De Zilk', 'Dearsum', 'Dedemsvaart', 'Dedgum', 'Deelen', 'Deest', 'Deil', 'Deinum', 'Delden', 'Delfgauw', 'Delfstrahuizen', 'Delft', 'Delfzijl', 'Delwijnen', 'Demen', 'Den Andel', 'Den Bommel', 'Den Burg', 'Den Dolder', 'Den Dungen', 'Den Ham', 'Den Ham', 'Den Helder', 'Den Hoorn', 'Den Hoorn', 'Den Horn', 'Den Hout', 'Den Ilp', 'Den Oever', 'Den Velde', 'Denekamp', 'Deurne', 'Deurningen', 'Deurningen', 'Deursen-Dennenburg', 'Deurze', 'Deventer', 'Didam', 'Dieden', 'Diemen', 'Diepenheim', 'Diepenveen', 'Dieren', 'Diessen', 'Diever', 'Dieverbrug', 'Diffelen', 'Dijken', 'Dinteloord', 'Dinxperlo', 'Diphoorn', 'Dirkshorn', 'Dirksland', 'Dodewaard', 'Doenrade', 'Doesburg', 'Doetinchem', 'Doeveren', 'Doezum', 'Dokkum', 'Doldersum', 'Domburg', 'Donderen', 'Dongen', 'Dongjum', 'Doniaga', 'Donkerbroek', 'Doorn', 'Doornenburg', 'Doornspijk', 'Doorwerth', 'Dordrecht', 'Dorst', 'Drachten', 'Drachten-Azeven', 'Drachtstercompagnie', 'Dreischor', 'Drempt', 'Dreumel', 'Driebergen-Rijsenburg', 'Drieborg', 'Driebruggen', 'Driehuis NH', 'Driehuizen', 'Driel', 'Driewegen', 'Driezum', 'Drijber', 'Drimmelen', 'Drogeham', 'Drogteropslagen', 'Drongelen', 'Dronryp', 'Dronten', 'Drouwen', 'Drouwenermond', 'Drouwenerveen', 'Drunen', 'Druten', 'Duiven', 'Duivendrecht', 'Duizel', 'Dussen', 'Dwingeloo',
        'Eagum', 'Easterein', 'Easterlittens', 'Eastermar', 'Easterwierrum', 'Echt', 'Echteld', 'Echten', 'Echten', 'Echtenerbrug', 'Eck en Wiel', 'Eckelrade', 'Edam', 'Ede', 'Ederveen', 'Ee', 'Eede', 'Eefde', 'Eelde', 'Eelderwolde', 'Eemdijk', 'Eemnes', 'Eemshaven', 'Een', 'Een-West', 'Eenrum', 'Eenum', 'Eerbeek', 'Eersel', 'Ees', 'Eesergroen', 'Eeserveen', 'Eesterga', 'Eesveen', 'Eethen', 'Eext', 'Eexterveen', 'Eexterveenschekanaal', 'Eexterzandvoort', 'Egchel', 'Egmond aan Zee', 'Egmond aan den Hoef', 'Egmond-Binnen', 'Eibergen', 'Eijsden', 'Eindhoven', 'Einighausen', 'Ekehaar', 'Elahuizen', 'Elburg', '�PNG

   
��͓"#�J���[�V,_��v�ȑ�����ѣ�	���C<i������V�RhoG:�2�;'O�t���d2�����9T�4h��SR��,�C���g�b���n��Ν댷+(�#����o@�+��^^^�n���Ɗ��`��lvSp
s�uO��97JKg��F��ysu-]]���]�F�����=�L�Ξ�k��4�	�%�yi����53w�����m�������G�HP��Q/JcBm��O�S�z�X,P#=ڡͮY��5�z}d�a:�#�Lc�4h���[��"�-�z�j��4�ƙo]ZD�ʕ+��o����o>�?m~�
3�22�]�x�meee���/''w�vGi�հ���Ӽ��[r�B�����Gyy�M�E�n���G���
�D���ʙ?��O�,
4�`g3z;����H�Mc�ufwS=3q����~A�k��c���!YE4���C��֮]+3g֬Y�|�LԢE���WJ�����=���+EIa�8�C�!�AK����ӧO�c$�r���_�q�6'!S\6lp�E"P,1�S��kӹ�.Z���8A��>�����s�"��o�>7	��E	G�q��t/�q��R��Cll��y}+\�pA��%�L/99��~2�ӦM�͠�`͕��Z� �+��]�wm��.EH��I�LS��LUG(ցJ�bi�S�*�0�6e"e��� !(֖D��f%.Ŋ�ۢ0�� �4Q�)n�����3s��q�KݛR \�tLA��A�V,8�WO���j�<)X�V�5V\�������|L�2:j��q�xb���������'OA}m��̼�<Y(.]��1L%���bU:�2�2��Y�U�x(�B�D
KM�ɺ����>:Nb�H$L�Z��XY��de����ۮ("�k��\���P��YBz&tO����կ�]��^�l�)����?8p ?��ϻzM@r�IG�m�.YɥK���$T`�7�L�(3o6���\�pW�R,[�8otO�)uKZH�|����"�oh-�����v��}j#�|DO�Gޫ+J�zl�Moq�CuUE���!K�I��J�w� D�B�!>F��۾�����Q�M#sO/մ}5�Q4M��Է�Mu:S�an�/�=����T�N!�Hc�s'��F�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT�Q,DF�U�BdT���p�
��-H/;��UPm��M�4�_��-~�v�H\��4ZD�09h&��_p� z"av����x�|R�������D�b$�_Ɓ(��,D�	���)n7�z?��!?B��UX���u�j,��P�%N��.5�:�,X�bǫ΢R���&��6np������]���rˮBq�`m�����.ӊF�����,�8�bm&,��]���Œ�u��0��B� ����[�%����:�N�kk�:�8��P'������q��rLAӲ����
i!=��u�
����D�M�P���$���״:?QW�(FM����hJ��N�Z#��q�q)�.#v>zo��Q%�wNV��2�:1*cԘ����k���.N�0�,�+պCi�h��!?D�h)Z�S��vW�h
��L{'�.,��۵�c�zq��p\{
[���-����n ��7NZ�hS8ƃ�B�M�f�_���f����b��vj��3�"��:>ܲ��K�q[��E�W$2js�H��;Xy�B��+N:%�i�Y�
,���(���1bBK��_��ˉ
!�{�#��
"���%~˛ʅK����B|��1�B�� ����s�Q���Ԡ��ü��0���3�#�=�fô��U�BdT�Q}R�}����B{yy9�����g��-7V(���r,�_n�8qYY������4��ϳ��>�t
$L���K44�K�R!�Zmp�BO�E��
		Ʒ���T��.]"2p�ȐZ|��j���������?��m�N,Y�\�������.-���IX3�z����5		���555;EI�v��b_#"##�U���k�=$(#�G����˖=!�!�Ο?O����$3��{���2�Е�N�<YXMq���@O�V��y"�d�N���?�E� �-999�j��I ��3qq��㩩��~�����RANM%�}��w�u����{عsΜ9/�A"U�B`` �~z�\���2AA�Bp��_}�e�t�:uF���$�>�ݻWlg8���Ɗ�],E��iE>9�9�-ƍ�Wuu��O��[�c!Ri��fh���!,��xKWC��h4I��Ik׮Cbb�x �C}MMM�r=��SΒ���P����7�]�,e0�ķ��+~x������?��?�����F,^��,�G���B�y�E�Ν{�����=r��+�����M��3�
���a�&��:]kZ�Q5�-�m4�ii*8��Y� �¤�t/�N��D��?���B>|�t���Q��u��iy�K�>"2�x`����[������*�+k֬�VA�@	�2�ϯ����:e.�t��'d�� qS<�P,�|�t�����x��#&�}Zէ(�G]"��0����:�?���N�2bD
V��{˶�Y������y��)o��;y��^{�i��Ҧb��m����Wz	���67m�"�/������dX�.��{R(�Ǐk���������;&,�~Q ������H�T
1Lgx,D5F�m�K�s�\�xQ�O�F4dE�+�RK���Qߚ� j�n3�+Ta�
/�v����'�z�-bꏣ0ԥBP�����ȸ";�G�v|7�o{_v�\���h��ȑ#D�.�e�t��[�Qv������t��/~X�8�Q7Err���V�n�ի׈��`ّK��������K�EF��ҥ�{ꐥ�@�ܹ���:���O��4"�*B��,�/Lq�


��$�l4�ؙ3g���m�ߢ�?~RUVV���t���F��*��Mp�O����|�r��+	�:did��a'
Kcǃ��}Ԁ!�����X)u�f�܏Ȩ�^�Gd��BdT�Q,DF�U�BdT�Q,DF�Upg����|�^�N���]!V�o���_D��?�����f��齱�k����K��x��'������������_1��v�'��_�<�x����_��_y��6 _ ־)��/n7=���Nٔ�Kq���UV�1�D�
|L@Z�/�7 ���G_/=�ޠw���V�'�)U����5�Z� �&j��������F��x�"z��龹��w|9�D��E�b���"�H��������-z��z�b5cF�Z�����.āf}Lx��:�U��PKtR���"�9B�٩:LNւ>g3z������"�#�ܗ@��kΆj���֪s����`T���EP�^����Ā� ǵ\����-���W0'�5�9�\�SCa|���g�Ӻ/��У�5�?^'���AZD���Y��7�#5x�a#^_݄�
�xb�[�Y0(T��	Z$Fiq1�M���Qh���(�W��
�̑:qMJ���َ5�-hh.Y'���k��A�����Z,��GiK���;yņ��[o���qЍ����<�ʭP+���xs}���z!D3ʄ���"JX���r|�����-*D@��""ʀ��V�Q�DB�!�N����̸"*�����"���k����Y�Z��Ȏ�E:�m��f�q&�&ĭA��p$�<��~D��Ўo.ZEA��j�]ֽ��h��omq��ٹzYXj���HwB���viy_�(��q�����mX�q#�uK�u�����y�������I:�T�.AQx��պf�\�"��5�
�D�,&D��w����aF��&�G��m	��pMz�8�j�-��R0�UA"$K�c��ŕ6�=mCS�{�
���6��9e���
(VT!�X�,��[I���q#�����Բ*BU��������|S�߻5<�Q'���lrQ;�"��-G��m�	1���������"#Ů���d�P+¿�^����]�������8c���5�nQ��!,g]�Y�l�jڱ�Tk	�J
��Q
[���lg|E��H�O@�_�GNGj�h!̋���Ve�Ľq�����.��M����\o��|�0-"
M+�/��&DTg�G�!��t^ȭ�AJ�p�
NEYs)��M�
�ְ���ՙ�3�a��Ȩ��E�؞�%"�"-,ڽ���E�F4�xIxT\�1�������ҕUu��}����q�G�:gTg�kd�f��{�O�t�)Ԙk����B2��� �`��r�k�Ф3������:�! M�^IB���ai�c6N��ʦJ��8#=L�&Ɂwɓ��91|����k�mnm������S���~C`�\�xL	��<q�h���,��U��N�"e��!����:��H������}
�ְ�R+�E�jD�8+�`�-
�����+L���_��;fd�P��
D�$5x4��^펓�$�D�Z��44H�J=������"
X��*`!2���Ȩ"�
X��*`!2����
��fT��fT�Q,DF�U�KKKa�XPQQ�˗3���;��̼���Z���
.,,Lf���7�νGf����3�,ێ�l����QQ�"�#2�"-e�ŋ��8j���N�-)�ln�˥v1ʣi�S���_c��uB��زe�ܗ���o�=���<^\[������ǖ�³d�"���-.�. �	���ZZ�aÆ����KR�G�|+�Uu��v�/*$�Y>kzƉ�C������ϯ�����:���{����B�gQVV���iBt9�<y�,������VH����	��A�{��=zt����ۥ)s	�%˶m�iIȪ�ۜ9s��D�&>(��ĢǓO>.����'����0d��B��K,,�h��L��{���d�ټy+fͺ�y�J5����G�8�_�xY�q�s�\��)��1c�t�<(�{���]w%c��%�RO�:E�!�%nǹd]?��3YX,�S||�<Gy&dI|���;�\��`�����iILL�_l�$ky��i�=&��rr)d%�=���	zX�pz�
$�ի����/���M��NK�*0\�M"9y����X�R�}�i��L�,�:0a�xg�cƌ��&�wF��&&&F��")J�b���~�ߵk��4($%
e�"Յ�l�}��r�46�%6��"���َ�@
�Xmzx4�f��Ԋ�OJ�VX*;��o2j(,e��5
���6�6ءz<�kCL�q�ZhE�	C�ºZe�a��U:Dk�:�0���"�F�*6�
Fq���:��m�x=	W=)����ꅍ�k�jZ���#u8'���3�n���"���߈A:���e����,���U��'����	��O�B�qX%j0���+F�1C�(�u��Q�XX:_!Zo�9��(��q-rݾº�������m�tD�zߌ�z$�k����st"'^]`i�����QZ=����E���NT��5�^�3/�-�
-���
��t�j`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*`!2���Ȩ"�
X��*�+�f�?���Y�����0w)Ĳ�20̝D
100s'�B

��I��̨"�
X��*`!2�@����v�K�:0���C!�������4����7���� x����f����&+
*���נ��)��tv=�B#1V�ݥ��ak�.&W��6��q;���o�>�\����lFI��ߠ/((���-��{�NO�#�d��KZl�����t:96M��~~~�HhG2��t�%q��#c�?Ą5*���2|LZ�4`�Pt���tg�4
zt,�Tn�91����������_�B���FOࣵaHH�u{k�"���<=��#��S��q���an�#2���Ȩ"�
X��*`!2���B���k׮���bee%�x�

   
~�B$��GB�#(��xH))������n��E�4���l�xo�6��o�
�_X�H��M"n����U��f(�y:���8~,�z-�G??�mI�$�9�\�֓��-�b9��\nE�����;[�X����ɿ��`�T%+}80aQP �Y��$�KS^S�����4V���x/�A��Rs��>�S5�)������!V~�b�e(��3(���K�Z6�^�H�_N�E�*7A�t(+Y&�z�j.��Zo����(�Sd>���!�s�)���Z\c��?<��C�CsO_.�/5�j,(�	um�GY����e�

   
���!�zt����;���s)B���dr���}�(J=W��V�)���/�*��%"�r�8�"�R��挝@���/��Hg�uYt�>^�"���*�d�:�Ȣ�D����\��P@�?S;pHմt�4�f���������x���+�>���I��E�QK�r|�;�r��H�pB^��.��?��,?�a4��OE�Tr&'F���s��7�ԕa��6�CR�İ��>�!ӿ�W
������gN    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �PNG

   
(���K�~���H��D�cAdb0,6�Y2�Z��ݿ���Znݺ��Rߕ��r��?����TUw�R2�Z׈[TC �4��p�\��! @`+D��	5� ���X���a3:F �̸��U.ʢB,گrbL TN`�G�aR���W"�Q�P���9_4x�A �$0�
,����ݒ��{e�+U�Y��e�㲂ϖGՕ�Pƀ �C�n��o�
��Q�4c��4Q:HM�
��s>N��Cm|�u���b�윊��~�e�={$n��E��D��,D�|��K�˖U�s�x�iG�@ E�P�+N��7~�Щ��#.���}���Ӧ3�Ғ6i,E�Z���S�燍I �x,@�\yyB�|�T���j7J��3����f����Ty�4Ϋ.��}��1]&� �@,3�Be=�	���Ϋ��n�E	�"J� ,�8��x������>y�?�'y��cEc� ���$���~%����K��jJÂ�{tY���Q�\#{�I&�x��(uާ�8U����J~�?MN�85K��  �'�w�E�?��c��WHO�����j�:��i�!��f��3̚��,�8�iR'I$9dG�� 
�S�{&v��\��̢7�O�
PO��  �M@n��*��E�Pml��mz^��b��[�ш�c'�>v���\3��A9��l�;�&0�B �K��Q;H���c��
��b�S>Jy/ ێ2  �2	d%9�Q��[X��&*3�a�S@`���S�(�p�N��)C (��㴌1�1*��u�N�I�C (��]���9f�S0q^�.9X�e�8� ����;ܪ��]�'�I�� �܁�^�ےB ����{HsŎ*2w)��퉳�����H!�hn�Я���~�_��ו��������"i)'�"��@[ ʶ�qB �@���gb@�-e[v�8! �� ���31 ���-;E��@mem�hDٖ�"N@�6��6�L�� �l�N' PDYz&� �B Q�e���� ��
�]��^��>���o[s)  �R	���d��$��%��&�Z�7�R76;+u~`�x�]��W���\ޱc���� *#`7�G�a�I�w���A�{�zC�}Qn6�$SQz�a����Ncq��];��C (���#��A~Yy��6���W]*�(C縅��\�*�&�Cׅ�Te���8ݍ(SF|� �' �Xt�=��T�=?�ֲT���i]�n-��'J	2}9rd����� �
^���?��$G��{:M.��V�W�4���G"�  �6�\&��m���"�����m�K+u�<q����ӧSQ���mם={��Z��  4���(g�g��ҡ��:�ʅ��/ˁexZ�����l�wR>�k��:w�\jdɓ�@�	�U:E�]�䴬�|O.��'J5�`K��J0��k��q,�X���@�	����ފ]��%�O�uLL�X��n�	���(�9~�&���  ������ur�������9K��E�s��p<�"�6@ F@ �Ȋ2>Qn�r� �A� %K��Pz�T}<�ۑB �
�Q���D���Ƥ�I�(Ϝ9�����h˺)  �.�(�{N�\�G�NeiQ�k�Lo��^O��i�@ ����\��eJ��ܰ�޴I/7rG�I! t��(�m�(�ԍ7s6�O�}�]{r��]��Z  L" �����)�G�J���ot��ܽ_1!�]�}�\��N}��L���1t�����޵�����i�[�I�/e��Ǻ�L����q�yNN�o���R5}�\��?��'� �"����8g�\H��x����d�����T!�9-�sv5���9�8d�ظ����:Ir�F��:��I�0�P��٧j��9zύe�`�t��Zy�iSm���g�d�J%���75�<m��t�gȳy�,6�f�~�5�f�Dux���N`�ť��`��@�'�:��� �$�(�����@'�Ի�خE���~���%�6�Ǟ��}WLݵ��|�K_�j1����O58�! ��&��O�����$|0��C�?��O�_|1����~��o&/����
����$�z��r���_�{.9y�Tr�-�$�����5W_��|�M�޿��ɕW^��ܹs�/@���Իj��zk�[�H����|�3����WF�4��K���È2�B�@������[���\{���^;©��+.���φߧ>�|��
>v�\�y�L�iQJ��a�p��izd� JϜ9��?u�r,��M2� F@����._*ǎs�R�PNt�3G��A{�^�P�ܹs�CyP�p���� M@�:�����겮�Bt��C��L3����s���D��������&��  �VgϞM]&�e=�5�N.����o��mpY4��B8�<��<u�T����k.@ �& W�Y'O�L�eA�n�T�K.��Ѡ� �޺'Iʢ�M�;���.M����\o)u^��C�v�ڵљ�� J&��{�O+<!����LO��g�)4�0$�$U�(U�~��鞎���~����A4��x@�ѥ:��TY���<)  �2ĞR^�r��[��W;]C�\�R/�E�|z�|���.�����P�����R�T�j�w�,M�u����_�$�,���ѭU��)~���N�,�(�w��wZx��[��� 8-=J��`ҥ={��_�T#]P���J]V�Ӥ���C��(���	v#b�� �>XvR,AӒ�]v��^6N�!�7`���'J5&�9r$}�r|i@�����hY��R�Q��^�#�����0�ʄ����,@�q��N�F����u!�?�V�Q���C���9� j��bA�_:=J�������e���"���=��E�X���7Z�$Q��S�Q>NC~�(C���u�O