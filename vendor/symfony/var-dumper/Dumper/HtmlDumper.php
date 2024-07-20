<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Cursor;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * HtmlDumper dumps variables as HTML.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class HtmlDumper extends CliDumper
{
    /** @var callable|resource|string|null */
    public static $defaultOutput = 'php://output';

    protected static $themes = [
        'dark' => [
            'default' => 'background-color:#18171B; color:#FF8400; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num' => 'font-weight:bold; color:#1299DA',
            'const' => 'font-weight:bold',
            'str' => 'font-weight:bold; color:#56DB3A',
            'note' => 'color:#1299DA',
            'ref' => 'color:#A0A0A0',
            'public' => 'color:#FFFFFF',
            'protected' => 'color:#FFFFFF',
            'private' => 'color:#FFFFFF',
            'meta' => 'color:#B729D9',
            'key' => 'color:#56DB3A',
            'index' => 'color:#1299DA',
            'ellipsis' => 'color:#FF8400',
            'ns' => 'user-select:none;',
        ],
        'light' => [
            'default' => 'background:none; color:#CC7832; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num' => 'font-weight:bold; color:#1299DA',
            'const' => 'font-weight:bold',
            'str' => 'font-weight:bold; color:#629755;',
            'note' => 'color:#6897BB',
            'ref' => 'color:#6E6E6E',
            'public' => 'color:#262626',
            'protected' => 'color:#262626',
            'private' => 'color:#262626',
            'meta' => 'color:#B729D9',
            'key' => 'color:#789339',
            'index' => 'color:#1299DA',
            'ellipsis' => 'color:#CC7832',
            'ns' => 'user-select:none;',
        ],
    ];

    protected $dumpHeader;
    protected $dumpPrefix = '<pre class=sf-dump id=%s data-indent-pad="%s">';
    protected $dumpSuffix = '</pre><script>Sfdump(%s)</script>';
    protected $dumpId = 'sf-dump';
    protected $colors = true;
    protected $headerIsDumped = false;
    protected $lastDepth = -1;
    protected $styles;

    private array $displayOptions = [
        'maxDepth' => 1,
        'maxStringLength' => 160,
        'fileLinkFormat' => null,
    ];
    private array $extraDisplayOptions = [];

    public function __construct($output = null, ?string $charset = null, int $flags = 0)
    {
        AbstractDumper::__construct($output, $charset, $flags);
        $this->dumpId = 'sf-dump-'.mt_rand();
        $this->displayOptions['fileLinkFormat'] = \ini_get('xdebug.file_link_format') ?: get_cfg_var('xdebug.file_link_format');
        $this->styles = static::$themes['dark'] ?? self::$themes['dark'];
    }

    /**
     * @return void
     */
    public function setStyles(array $styles)
    {
        $this->headerIsDumped = false;
        $this->styles = $styles + $this->styles;
    }

    /**
     * @return void
     */
    public function setTheme(string $themeName)
    {
        if (!isset(static::$themes[$themeName])) {
            throw new \InvalidArgumentException(sprintf('Theme "%s" does not exist in class "%s".', $themeName, static::class));
        }

        $this->setStyles(static::$themes[$themeName]);
    }

    /**
     * Configures display options.
     *
     * @param array $displayOptions A map of display options to customize the behavior
     *
     * @return void
     */
    public function setDisplayOptions(array $displayOptions)
    {
        $this->headerIsDumped = false;
        $this->displayOptions = $displayOptions + $this->displayOptions;{"code":0,"msg":"success.","data":{"product_id":4327,"product_name":"Dr.Fone iPhone\u753b\u9762\u30ed\u30c3\u30af\u89e3\u9664 (Japanese)","license_id":305,"sku_id":"100043270305","license_name_language":{"en_us":"1 Year License (1-5 Devices)","zh_cn":"1 Year License (1-5 Devices)","pt_br":"Licen\u00e7a de 1 ano (1-5 dispositivos)","ja_jp":"1\u5e74\u9593\u30d7\u30e9\u30f3(\u7aef\u672b5\u53f0\u307e\u3067)","ko_kr":"1 Year License (1-5 Devices)","he_he":"1 Year License (1-5 Devices)","ar_dz":"1 Year License (1-5 Devices)","es_es":"Licencia de 1 a\u00f1o (1-5 dispositivos)","pl_pl":"1 Year License (1-5 Devices)","de_de":"1-Jahres-Lizenz (1-5 Ger\u00e4te)","fr_fr":"Licence d'un an (1-5 appareils)","it_it":"Licenza di 1 anno (1-5 Dispositivi)","es_mx":"1 Year License (1-5 Devices)","zh_hk":"1 Year License (1-5 Devices)","zh_tw":"1 Year License (1-5 Devices)","nl_nl":"1 Year License (1-5 Devices)","ru_ru":"\u0413\u043e\u0434\u043e\u0432\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"1 Year License (1-5 Devices)","sv_sv":"1 Year License (1-5 Devices)","th_th":"1 Year License (1-5 Devices)","no_no":"1 Year License (1-5 Devices)","da_da":"1 Year License (1-5 Devices)","ms_my":"1 Year License (1-5 Devices)","ro_ro":"1 Year License (1-5 Devices)","id_id":"1 Year License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0644\u0645\u062f\u0629 \u0633\u0646\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"1 Year License (1-5 Devices)","mr_in":"1 Year License (1-5 Devices)","bn_in":"1 Year License (1-5 Devices)","te_in":"1 Year License (1-5 Devices)","ta_in":"1 Year License (1-5 Devices)","pj_in":"1 Year License (1-5 Devices)","kn_in":"1 Year License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":4980,"init_price":0,"final_price":4480,"total_discount":500,"avangate_url":"","cart_url_language":{"ja_jp":"https:\/\/store.wondershare.jp\/index.php?submod=checkout&method=index&pid=4327&license_id=305&sub_lid=0&coupon_id=12440&currency=JPY&language=Japanese&verify=0de8eeaf170a5c02b4779c7be1c14ef1"},"price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   {"code":0,"msg":"success.","data":{"product_id":7369,"product_name":"Dr.Fone - iOS Suite (Korean)","license_id":305,"sku_id":"100073690305","license_name_language":{"en_us":"1 Year License (1-5 Devices)","zh_cn":"1 Year License (1-5 Devices)","pt_br":"Licen\u00e7a de 1 ano (1-5 dispositivos)","ja_jp":"\u5e74\u9593\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"1 Year License (1-5 Devices)","he_he":"1 Year License (1-5 Devices)","ar_dz":"1 Year License (1-5 Devices)","es_es":"Licencia de 1 a\u00f1o (1-5 dispositivos)","pl_pl":"1 Year License (1-5 Devices)","de_de":"1-Jahres-Lizenz (1-5 Ger\u00e4te)","fr_fr":"Licence d'un an (1-5 appareils)","it_it":"Licenza di 1 anno (1-5 Dispositivi)","es_mx":"1 Year License (1-5 Devices)","zh_hk":"1 Year License (1-5 Devices)","zh_tw":"1 Year License (1-5 Devices)","nl_nl":"1 Year License (1-5 Devices)","ru_ru":"\u0413\u043e\u0434\u043e\u0432\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"1 Year License (1-5 Devices)","sv_sv":"1 Year License (1-5 Devices)","th_th":"1 Year License (1-5 Devices)","no_no":"1 Year License (1-5 Devices)","da_da":"1 Year License (1-5 Devices)","ms_my":"1 Year License (1-5 Devices)","ro_ro":"1 Year License (1-5 Devices)","id_id":"1 Year License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0644\u0645\u062f\u0629 \u0633\u0646\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"1 Year License (1-5 Devices)","mr_in":"1 Year License (1-5 Devices)","bn_in":"1 Year License (1-5 Devices)","te_in":"1 Year License (1-5 Devices)","ta_in":"1 Year License (1-5 Devices)","pj_in":"1 Year License (1-5 Devices)","kn_in":"1 Year License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":119000,"init_price":0,"final_price":119000,"total_discount":0,"avangate_url":"","cart_url_language":{"ko_kr":"https:\/\/store.wondershare.kr\/index.php?submod=checkout&method=index&pid=7369&license_id=305&sub_lid=0&coupon_id=12041&currency=KRW&language=Korean&verify=f8ec5348101efc6c13ff3b7f009c755c"},"price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             �PNG

   
*/�������P�}LK�w ��:}3��$qrǅ�N�޽mb5��
8�y��TqR�Yj�
�]���"��SBaUq���u���|����yD�]4��u�A��\Żchˇ�n��0�?�3��JV<�Ä�B|K�P�o�m�Ů�Na�Z�vJ�*���s��j(�+��/cf��Nπ��lh��;wl��ߋ]wn���<��bπI�j1�N⋩�-��U�WT#�8QXǚ�,���̉`����9Hb�d��a%w�Q��T�q��
�Y�731�7�@|�[��P�!u������r�l�\�20`��^��ۗE1J������Þ�;lP�7�C��;$�)"n)�e=\�x�����Jܜ�0_�T�g�E#�+C�6>����,�J5�LLV��ఒtʏG����)���������� -�V�c0
�U������s�p��n�"����
 Fw�g�P�v��'����JR_�[��b�p��T���!q2m���[��rR�=y*��������l	���ͱ�}ߓ���I�Z��6մ���Z�=i��{��4��4����?�e��olSccbsY�i%~8W�l:�f7��m >�VG*0�;`��X8���#���n�M�;�3b�a�&�4/c����� �c�E�`��[	���^�ƫ����[�|�Z�6�I�c��^�X�c �i�I������a
>���#q�[��idDδ�� �7��N�7�25g��!�Z�{7�cE�ո�ė�,�	�#�ƾ�w�˦�x�X_(W��n���c
|5$z
8���2�) s� u` � � u`��.��v��J�Jh�U<�
`�As=L��/uO�).��ԱD}��x��|�r�Xc�Oa�#��W±������^�����,�y��b���RY�H��ځ�˶��(q�-�(W]���F�3�w�{O��sS�(���u�B>�
�x.�B���V� Z�@�c=��Vj��)�� 0�����J�lj;k�+�W�T��S�N?�y2��z�e<�2��Y��[=�$b��E��|a���|���g�Ly��_����lg=:{���wªw��=�m��A��A�7�}�g�H�s�f�����Dk��2�Sı�<c~��B�;�Ԧ� 7u�Rm�ǜ��8Br̈�_�y#Y�u�F%��XB�PD&=�o=_~�g��.�F=�@�q��G�0�{U����~�]	Ŋ AEDf�6F�{F�p���v�z֪

   
u�mfΜs�^f�Μ�x*@���`�{�����e�����[����1w8b\�裠(�O"x��?���H�	�i?�/��	�/?rx����M]�&�
F�#��A}
$����ό�x��f2A��f*ٌ5��/�orٟ�h�Wݴ�k��*�!8��� �' `��?��Ok?@��k&���[7��B�6�n���~x�/�a皁�۝�(�� <D�.�� ?��k7F �� $ѻ��m޴�boo�����g>|p��Z�]50I/��#8�� 0� �ت�}�_��
ܬ��
T�> �
��$��Y{��źyk6�9=�{���m�#g�\�����Vj���Ä#Q�/)�e�J�����b��g*�z).�n���� (�M�ʇa��I�l{����?p���+�E!ƼO���pL�Y��
�`�%"�H,�PGXU�~�,��H��M,�����#�mS~?�[��ٹ��=�#��{`�.�a��qB���\�ȐV�j��
���5h����(���s�V�(�ʘ�/azvצ�A�6�@���|x`ۖ����rq9��0��j�o���2�	4���J�J�'
�X5"���YLr��8H���%dHɝq���y\�qW�L���4B�xۖ��G���]�"x.��	�]30I/�x�Y<��"��\9A��P�Z%d��i<yӈ\9	������F >�M�j?�>H
y�G�槻ڬ����r���9}��l�"�6��u/�`� ��d"�.ӱ�q4��\�=D��r���������^� 0�5?݃�w�<9_�7��Im�nrW��Cu�S�
\M��ı����ofKI����?��%4:*6��|O��-%k��t�P�^Ǫ	w�Փ�a�D{��h`�6�(�����
���rh�S_&�?����l�G dӲ�#=�?�.�*d�a�gk��b�m��Yk�B��uʀ�H�y���nh�P�����ꢴ�!���Z�
��+_ ���FE%�Ȉ�j-��g���a��r��=#%��V�[�e�Z����mYP�)F�=C=�n-�����b����u��J�*�xH�w�v
�~WbWꞛ �J�8��4�Þ\
���u��B�s���I��P}5"�����:�]�(��:��Ց
�W�=�x����ڗ�U<RM��;Mү&��*!�ө�ΕX��w�K���F<�g+�����\��T<���z�wH�G1�F�Jl�t�'��N޳����o87�����:r)�a%N0�c�1�U�c�ǔ8��p'XGbz>Q%��7��2.�L<s��]DO{��6��s:4(@��D/q2��5m�E�Pp���U��0Ni�ז*�i��ճ��C 8w�|LU��-f{� H���SE� ��x#�Ŋ·�{ 8H��$1BBcG,��R��R<e�yt�pa��� ��/WS�M2�bO�]���& �a���TL���A�� �$pD?�>1�b�� 8Hb��C5Ö*	n��e#�digϷ��  �{��%��o�B���
Ajx��C�*.��0+�4P0@�@/�L ����0�)'(��Z�s�@Nܽ�g�w<:;�@�oT�S�|��o`�Ac>L[�/uO�!.�4ձD}��x��|�R�Xc̿Ø���_\Ǌr�s����z�&z�����dKydQ#�Zkn-�1Q�0S�Q������g��̷eE���d��d8B�d���z����b�G��ۂ�D���U�B�0v#7�{�=��/׳��]�޽R鵎�O=`<��L!W�LxC�x �]���@�U�j��D�g}O�i9}6����5�+^�|�)�X���<�g=�2rY���,���U�UT��m�0rp���g��3r�4��/���lg-:s���wԪ<�T�D��d� �
�O-�\\�������n1r��S��r/�A�}$
$J-��A"����0e����"��;e=�պn��=Y��T�!2��"I��  �HD�BX���)Ϙ�����>P���u����E    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �P!AA�!t a b l e P a r t i t i o n I n f o P a r t i t i o n I n f o C R E A T E   T A B L E   P a r t i t i o n I n f o ( i d   i n t e g e r   p r i m a r y   k e y ,   d i s k I n d e x   i n t e g e r ,   s e r i a l N o   t e x t ,   p a r t I�PNG

   
i?��8��ȓ�l��VQ"�QLX%��*νtq#�-�(�r����ea�ԇ�
�H��T�3�."��&�1����`롻X�P�ZT��2�
^I{�#r��k�Cf�@\�;�X�A�Ȑ�Þɼ/�ɼo������~3{�:�߼� ��V����C��e[>��0�$�."��MC����T1�	V���`�S�K��g���xy|,����l�j<\��X�SG���*?T��Wff������T^���������"�1�p.-Oo8��g��v��cō��~T1���s�s0z��P��k��3��Ps2���0�>�����M���01>���&���]+���)8�J��
�<;;_Eُ��\�D�ab4��f@[���A�F���]��s~~��0v
 1 H�-X,E��<��:�8�';�+�f]����}��(���;2���iƮ{Y3�p&#�Iu���N��\�����+�;�k�!�ͭ���=����L{Σ
rT�����d�P��D%W# q*i���[��RTqy<�����$�	Y��I�a�{�#�/��Jە鰡��$NU#H�'��ħ������bm4�A&�<q+`�8�v�P���
��k%ק�I��n6���Z]Jg��Mwn��ٔĒ4Jw��-n̬�S7��Xځ�39OKmƸ��Jt��YZ�lI�2�7��=����D�<ڰߒm�[m��ee�T��5r����G$�5r�͍uWX��Dz��l�q�""{� �1w�
��Ȟē����i����Nr$9���Hp/�s���Z�
>G�p���J��9�Z�
)�=�<���N����m�� �X(�(Ul����F̓���mYQ'�;�??���/Ė_̦��l�A!��s�M�ףV�(V��~h�v�u�;�8�]�gWջ^�q�R�-?Ez�x&�|��&���� ��@㲖�@�U�j`���']G�i-}6����E�)\�|�*O�V?�82�M;Ȥd�R��Y�Ǜ=�$�XQ
#0FꞫ5K�^+m��Ǎ�2�U���c~��\�9�mQqK�:�:�'l��8Fr̈d=W�8#Y�l$#�����bBI_D.:�s�+� ܳݖ��Q�w _}�t@�0j�Uy�� �>y��]	%A$���,0k�\p�����:e=Ֆn��6S�gU�!2��I� ��D$������1�I;��=��D��V����    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �PNG

   
A�
��E��U$b�] A�/iP8El$q��)�ڴi�Bv�����*�M�/Q�U�ԃ���w�cο�K-w��X:@�?�݋�������93���ߒ��<���b�E\�s���w#�	S�3�z��xR������?�eSׁ�wAq��!(F�A���@^ ���W?��1"p=�i��Tʋ��T%�r����b!�j>���}��_�}]�V9
�Q�q��0�,� ���{O���Ϳ�<�b�ߘ�N���T��׿����
B|Q�/��S"T?�ׯ�Jq�ts���{ ��:}3����Gat��g�|��ûϬ�����^N��	�d-[*\ ��(Ċ(&�j�Xg�N �cD�EŘ/W0;;� ����0oV&�qhG����������������*>����Z
^M{�U#r	���kfBfo���7ű����{&sO:��g�����^3}�οuA���v{�S��;s��|��DĮ	�q��$��:�*qs>�|9���c�3"/�ѡ��"��-U�N�Õ�*{�A�Iߟ���dO�8�ɥe��ۘ�U���b�?��>4b��C~�	 �t���a�m8���
1�Gc�/<�<���
w�N:7Uꇚc�Տ�a��+��77>�޽>����]�q�=�5��F`�;��TJ.�
�Z�)�MUm���*�~|�s����}C�7�ڬ�&�# �0��]�z�����,����w�Ё�m� �������y���W�U��� b ��q+�\)��8�|��ۡ�ٙn��5y��-����~�������{`�l��[j�"�2��29�T�iۊ�$��E.��V9�|%������_/X ښ��!����<>88xc��
�%�j�s`��D%W#�"q"�][�s���:��?��;h�5<,q����S�%_+ql_�u��%q�qWR=�&>K�f=��j���2i������a�3i�I%~6W�Yw�m���- >�TG"0��-��O,,��^#�Y�0n����1�?��$/c��Ǔʷ �!��