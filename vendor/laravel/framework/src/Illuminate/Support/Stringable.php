<?php

namespace Illuminate\Support;

use ArrayAccess;
use Closure;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;
use JsonSerializable;
use Symfony\Component\VarDumper\VarDumper;

class Stringable implements JsonSerializable, ArrayAccess
{
    use Conditionable, Macroable, Tappable;

    /**
     * The underlying string value.
     *
     * @var string
     */
    protected $value;

    /**
     * Create a new instance of the class.
     *
     * @param  string  $value
     * @return void
     */
    public function __construct($value = '')
    {
        $this->value = (string) $value;
    }

    /**
     * Return the remainder of a string after the first occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function after($search)
    {
        return new static(Str::after($this->value, $search));
    }

    /**
     * Return the remainder of a string after the last occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function afterLast($search)
    {
        return new static(Str::afterLast($this->value, $search));
    }

    /**
     * Append the given values to the string.
     *
     * @param  array|string  ...$values
     * @return static
     */
    public function append(...$values)
    {
        return new static($this->value.implode('', $values));
    }

    /**
     * Append a new line to the string.
     *
     * @param  int  $count
     * @return $this
     */
    public function newLine($count = 1)
    {
        return $this->append(str_repeat(PHP_EOL, $count));
    }

    /**
     * Transliterate a UTF-8 value to ASCII.
     *
     * @param  string  $language
     * @return static
     */
    public function ascii($language = 'en')
    {
        return new static(Str::ascii($this->value, $language));
    }

    /**
     * Get the trailing name component of the path.
     *
     * @param  string  $suffix
     * @return static
     */
    public function basename($suffix = '')
    {
        return new static(basename($this->value, $suffix));
    }

    /**
     * Get the character at the specified index.
     *
     * @param  int  $index
     * @return string|false
     */
    public function charAt($index)
    {
        return Str::charAt($this->value, $index);
    }

    /**
     * Get the basename of the class path.
     *
     * @return static
     */
    public function classBasename()
    {
        return new static(class_basename($this->value));
    }

    /**
     * Get the portion of a string before the first occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function before($search)
    {
        return new static(Str::before($this->value, $search));
    }

    /**
     * Get the portion of a string before the last occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function beforeLast($search)
    {
        return new static(Str::beforeLast($this->value, $search));
    }

    /**
     * Get the portion of a string between two given values.
     *
     * @param  string  $from
     * @param  string  $to
     * @return static
     */
    public function between($from, $to)
    {
        return new static(Str::between($this->value, $from, $to));
    }

    /**
     * Get the smallest possible portion of a string between two given values.
     *
     * @param  string  $from
     * @param  string  $to
     * @return static
     */
    public function betweenFirst($from, $to)
    {
        return new static(Str::betweenFirst($this->value, $from, $to));
    }

    /**
     * Convert a value to camel case.
     *
     * @return static
     */
    public function camel()
    {
        return new static(Str::camel($this->value));
    }

    /**
     * Determine if a given string contains a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @param {"code":0,"msg":"success.","data":{"product_id":4320,"product_name":"Dr.Fone - Sblocca Schermo (iOS)(Italiano) (CPC)","license_id":136,"sku_id":"100043200136","license_name_language":{"en_us":"Individual Perpetual License (1-5 Devices)","zh_cn":"Perpetual License (1-5 Devices)","pt_br":"Licen\u00e7a Perp\u00e9tua (1-5 Dispositivos)","ja_jp":"\u6c38\u4e45\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"Perpetual License (1-5 Devices)","he_he":"Perpetual License (1-5 Devices)","ar_dz":"\u062a\u0631\u062e\u064a\u0635 \u062f\u0627\u0626\u0645","es_es":"Licencia perpetua (1-5 dispositivos) ","pl_pl":"Perpetual License (1-5 Devices)","de_de":"Dauerlizenz (1-5 Ger\u00e4te)","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Licenza perpetua (1-5 Dispositivi)","es_mx":"Perpetual License (1-5 Devices)","zh_hk":"Perpetual License (1-5 Devices)","zh_tw":"Perpetual License (1-5 Devices)","nl_nl":"Perpetual License (1-5 Devices)","ru_ru":"\u0411\u0435\u0441\u0441\u0440\u043e\u0447\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"Perpetual License (1-5 Devices)","sv_sv":"Perpetual License (1-5 Devices)","th_th":"Perpetual License (1-5 Devices)","no_no":"Perpetual License (1-5 Devices)","da_da":"Perpetual License (1-5 Devices)","ms_my":"Perpetual License (1-5 Devices)","ro_ro":"Perpetual License (1-5 Devices)","id_id":"Perpetual License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0645\u062f\u0649 \u0627\u0644\u062d\u064a\u0627\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"Perpetual License (1-5 Devices)","mr_in":"Perpetual License (1-5 Devices)","bn_in":"Perpetual License (1-5 Devices)","te_in":"Perpetual License (1-5 Devices)","ta_in":"Perpetual License (1-5 Devices)","pj_in":"Perpetual License (1-5 Devices)","kn_in":"Perpetual License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":49.99,"init_price":0,"final_price":49.99,"total_discount":0,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=German&verify=34afb61907d36ae1ebe7f95b7a207205","fr_fr":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=French&verify=34afb61907d36ae1ebe7f95b7a207205","es_es":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Spanish&verify=34afb61907d36ae1ebe7f95b7a207205","pt_br":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Portuguese&verify=34afb61907d36ae1ebe7f95b7a207205","it_it":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Italian&verify=34afb61907d36ae1ebe7f95b7a207205","nl_nl":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Dutch&verify=34afb61907d36ae1ebe7f95b7a207205"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":22,"currency_name":"IDR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":15,"currency_name":"SEK","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":28,"currency_name":"INR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              {"code":0,"msg":"success.","data":{"product_id":4320,"product_name":"Dr.Fone - Sblocca Schermo (iOS)(Italiano) (CPC)","license_id":136,"sku_id":"100043200136","license_name_language":{"en_us":"Individual Perpetual License (1-5 Devices)","zh_cn":"Perpetual License (1-5 Devices)","pt_br":"Licen\u00e7a Perp\u00e9tua (1-5 Dispositivos)","ja_jp":"\u6c38\u4e45\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"Perpetual License (1-5 Devices)","he_he":"Perpetual License (1-5 Devices)","ar_dz":"\u062a\u0631\u062e\u064a\u0635 \u062f\u0627\u0626\u0645","es_es":"Licencia perpetua (1-5 dispositivos) ","pl_pl":"Perpetual License (1-5 Devices)","de_de":"Dauerlizenz (1-5 Ger\u00e4te)","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Licenza perpetua (1-5 Dispositivi)","es_mx":"Perpetual License (1-5 Devices)","zh_hk":"Perpetual License (1-5 Devices)","zh_tw":"Perpetual License (1-5 Devices)","nl_nl":"Perpetual License (1-5 Devices)","ru_ru":"\u0411\u0435\u0441\u0441\u0440\u043e\u0447\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"Perpetual License (1-5 Devices)","sv_sv":"Perpetual License (1-5 Devices)","th_th":"Perpetual License (1-5 Devices)","no_no":"Perpetual License (1-5 Devices)","da_da":"Perpetual License (1-5 Devices)","ms_my":"Perpetual License (1-5 Devices)","ro_ro":"Perpetual License (1-5 Devices)","id_id":"Perpetual License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0645\u062f\u0649 \u0627\u0644\u062d\u064a\u0627\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"Perpetual License (1-5 Devices)","mr_in":"Perpetual License (1-5 Devices)","bn_in":"Perpetual License (1-5 Devices)","te_in":"Perpetual License (1-5 Devices)","ta_in":"Perpetual License (1-5 Devices)","pj_in":"Perpetual License (1-5 Devices)","kn_in":"Perpetual License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":49.99,"init_price":0,"final_price":39.99,"total_discount":10,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=German&verify=1e5d8be03ff9bb4be21158b81708a38a","fr_fr":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=French&verify=1e5d8be03ff9bb4be21158b81708a38a","es_es":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Spanish&verify=1e5d8be03ff9bb4be21158b81708a38a","pt_br":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Portuguese&verify=1e5d8be03ff9bb4be21158b81708a38a","it_it":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Italian&verify=1e5d8be03ff9bb4be21158b81708a38a","nl_nl":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Dutch&verify=1e5d8be03ff9bb4be21158b81708a38a"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":22,"currency_name":"IDR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":15,"currency_name":"SEK","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":28,"currency_name":"INR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             �PNG

   IHDR   <   <   :��r   	pHYs       O%��   $zTXtCreator  �sL�OJUpL+I-RpMKKM.) Az�jz�  	�IDATh��Z�o���;��k���C��MR�D,!��T	��"$
m	�T}mP�V�T��J��Z�}��c)�P�	^�T��D��@���u��z����{Ofg���w�v$|VWg�~��=��s��i��i��i��6D��sf�2�s.�g	t��' L ` wt�mn����.�/�����(��sz��,?��`PS���W ����)��^˶���xm���D�=kð��
8�.�0����^ɸ'�K\:&!�����t�������4��.E�=�"�������5�v���k��gw���n��
��T,5z�?	�~�����`(� �5��1�X�E.����w3�N�@��S�';i�#��
���5�?�#�8��+��)��;�t�.r���l��\�.���n�����aCUP�*  GY�~�8aN�V��
�2�wz��=.q�g��#��c0��`Yq�YZ��\Hf��! A�`�6�q���2����Ѻ��l/ֻ'����7 m]���?�\�o����\G��[�%���Hc�<�y�8�#���8���i���b����Kȋ	�Q�%W���Wc��P�^��h�<�gҳ�N��LdL���hW�I׀Wy��O�+�PXh����O��6ZD4�i=/���Dg2�b>}�6��@���'��ѕ�.r��v`���M|P��䆷G`f0+�{	�@B^�e	��>�U�f�!Ӭ����`	yV�����g�Wx����+@1Xy�!�1q��Տ�{Js�	n��=����g���:;X�/�{7Zb�k@� αz�ܻX�/��vd�#J`~��;nю�(́��t���[�����Xm��rdE�R�f}�ҧ�ϰ�|5�EǄ\��]ĳ!@
�o�.֮���Q�&h5X�Z�'�d�}4SUձP��)V��SG6�4�ZtV+��Rc���#O;��&�(��^��Q��)�
 �<�	O�=>ޮ�z�Kت���Q!׭�g���Y��RC��[6p����]i\m+k׀�Ġn��ߊ{J�n'9��� /���3n�G�_7tR)�8�چ��Ab���K�"��fCV�X��(8�F(���B����clȭ���k!��@{v�#>��X)0��Mڸ)%$�W�"����雱��I"�5w�;-v`R�j�)���2�`	2�P����9�}W��c�U�h��	Ng�J)wz4.42�^�i�e��2$�-��DY�A�-�T���RG��rmV�/�� C� (�]��_�E)�ܶ51rƀ6^�K%�N�t�a�ЗT6����2A��6r���%s��Ik,h��Jmv���-���J�;�}SHq���yBBp2
OH�*�v�qn��(�oe����nݮ���l,�R&�/2x�o*"8�Q�!���z��2�@��$��J��l,��A�ͪ]m[>?4�z�x���N�~�4�NK����xծ� ���ϼc;��V+�7�>��ۀP�孅��<߭�af�_�ľ��T�` 1n�l��53<�ήۮs�h9�d�����8�ʷ i]�~s�!F"��Q���P*����H�T0�����5خs��׬�]�3�Q��Z��OG�&�L�4�� 	�RSx�@s�tf@yQX>5�g�q�o������%���n�t�T���J��V=��D <�}O�è��WM��M����UY�Q3�����7�����v�V��x�T���{ La�Z��!��t�"��N��p�ʇ.EE�gx�����y��s�Oa>7A"!cH%Q�n�ƫ���)$ZX�t���'�' �~g
���,���J�*��m��ч���Ʊ���~���U��ba~t��n1t>-��sD������8���/Б�Iʌa&�0���	�o�DC���C�p���W-i�<�o�<���CH+6鰰�Y�P�6����wq}��l�)�Ɋّ��O'��"k���nտB��B٭  �,r�Lf���Qd��H�خ�{�uT��1�?���s/�����K�mH���e����6ޠ����o���諛xb�N� �n mX�͍���W�w�B���ſל�����a��>
i�ۼ��rqk�6���T�ۏ�̾��w���c#�/��5��ז�Q�h��䷓�ZX?�z�Z	�k�*mX��,��,�/��J�Ǫ[�
A��1�H��i��W@�Q�jy��~��bƏ{ݳqړϖ�^�!!�`+{���a�)d0�7��N�n�%Np��rm[�Mخ����%�Vƹ���˻�uO �������ԯe���G9����,R�K�`&,Ë����.��vmTخ��H�2,��u�◳#�o{
ا���	/1xޖ��d	�]0+(��@D 0ɄA,�*h��6\��`���.�.W����1�̣L�7"ĴNDkDXc`� �����;����}ڧ}ڧ}ڧ����qђ5P    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                           �WP{0 *0 (PzJ3v  %�  	 %`!  *  %��  *  %
�7  *   
�z  *  %@|� %	� �%{ �IS :�z�0 (�%Y�C 80 �z0 p�@{$60  �0(4� {�t``�p�  �, {�v {Lt {	�M   x~Y ��� Hs  C  `Py H �1�pu#��@�@u�� $v� 
�q� �y   u"��Ġ"� ���0 � &�1$~ t�  �D~� W�/ G�pzP{� "� ��$v	� �    t  � `R� � A$v�   Cz 	h��1r�"��P  �@ �( �y1r�� !��0 4z	P    � �y1x
� 63Z� G��h6$t� p P0x 5p"� |#� �l@ �8xP�Ar� �� 0r`� �� @	� � 
�"T� � �fG9  @��p ��@$r@ 1rp!�� Ar��P*Gy�6rP � �0PE$r`  @uDxp��VUUU�    /j;�� `=1$r$ � 4 �� �{ z$ 	@ p�@d��� ��p�> b@ "�  P#@  �y���$ x `��$x  "Tx	0  ��xJ#  0@rb $���	O�� �!r  0� ��7���Tx� � P @�"
  T$x	P��   C �  Ix   8
06&���"���`�� 
�� p�p=x����p
� Dt�� �` ��� � ����@�PNG

   IHDR   <   <   :��r   	pHYs       O%��   $zTXtCreator  �sL�OJUpL+I-RpMKKM.) Az�jz�  
�IDATh��ۏG��o3����5"ǆ�/��F�H+
��b�(�$�@ � �((�A�B�	) 
y��l$H��Y'$�����2���ᡧ{�{f��޵�ÞU�j�OW�|U=�/��/��/��#r+WUYc�xH�� G�E�@�+�\.+����~�ɳ"��ʦ[��͓s�`>)�!e����(�3�W�
�N�_��ܟ�ڶ=���	໊~�߼f��L� �!��)�:�W6�	�6�FD�+��ݴ�wG�l!����9-�+�4u���Z?)�ӊV�h����V�%nkU�ӻ��n^�k�Q�9�Ɂ��_�.qBv>g�b]�<[V������i��׵���_�N�`��-jQ�u:tԧ�> �(�Ǆ������X#�@������n��\�������p[}V�UV�5�Jݬ��]���.�KI\Ƥ̬LpȪrԞ�}��xC��~�W�dp]�'����s���Q���߼^���ߘ2��+s2�Q�K�{��>���167e"�����nj�h@��hu�s���t_��/Vu_í+z c�'U��^�+}g+�W=ܥ���;|M��
����T���\L�hV��$�w���6��{�#|�r/�8CWq����gG�02��6NDD/aFt5�'���1C@%�A�7����z�ؼ�}�ݏ'.È����Y�����-��E
4)w5���\��`bP=pq2iM��ϓDZ�r��O���� T�rD���8F\��IE?R���s���]!�06�h��fSbs�~x�4���E���!Q��t��HMk'�pDt:�A�A��:h��~�r)�4�٨�k��*m��\������rjO �����"Sjk����G72 t˄*�s�(H�d�>���<�����-�07U���n�&m�F�8�T�q���
+�%|��m��朒���t4爾s�	x-����
1�jԎ�0X�)��ZeſJ=\ˀ2���ۭ����ÿ�qѿ���9���vh���S	�����lF\&H늛c�._�e����椧h����j���=�"�5�w;<�V��b]-\�ވ���N5�Rx��S��:�v�j\oP��j�*U{��v+[��-`k�xE�n6وڨ���=5B���CW�-��;���0-�Q ��kb���l[V��l:Ƨk���`vH�H4}�������i��@k�e��ó-�x]ț�1]��G����d��[��>�k�q��A-���槿���S%KC�Ƨc���Z�v�3��8�WK��^Y��ぁ��Ȕ�mӉj>���=������'�'�������1F��Wl\���ii���!S����������8�5W*�p�,.e�t�1�.�M�{x�,��x�ĥ��!�d�^\��������"��=%q(��qV�G&<�d��:P�֍[�2�����I�>��}"��/�W�X〔�*oE#cַó-�������*��$2�'���f�3�rL'I���e�&iʬ3ɼ;��IQ:~�������(J�rƘwfpp
��,�ߚBj�<\�\J��0��0�����N�=�k��Xϴ�V�%�#�f��xO2=4��sS<)e�1��3�G�V:��巰�zf׀�����Fv� �Hy�����lC�âk�@��<b����8RN>>��~��X�^|v׀ED�0x��F9�b�X���3�ك������YXQc�<N��j��K�6R�F�:,M�M��r������Q>��v���t��X$�X���
n
"E
;���t%���Q�8Hۭ�����9\^����f�	�O�e$�����=����m���W]➉;���[���"��hI���6�ۀ-�L��}���響6:�����ٞp,������_�y�r����U9������"�ߣ�<GF�;6�]s�����t������~lT;��?�8�����mz!=&�7����Wn\��~n^C�GHJ�^��H�{�����'(Yn�}�K��Xj�91{�ãb���R�<"F6k��|�,�S���cs'8�V�,7��0��"ؒ�2�����>� �夌,ɯ�_�2�&�yd'v�1myu�����ӱ�53V��F�Ѿ�r���ޢ4	L����~!�ky̸S����,M�Õ�LK��o����4e���Ru��0����'���u��x��!t�2ێ:�޾���Ժ��uZQ�����W�<J���We�4�ѱ۹��@�.St�(\Y���]J����ǿ�S�o���K�˿i퇰���e��F�7�ul��t�n�"���v�qg���S��X����	��zT��o?T]���ؽ��x�m�}"��k����*S���A�7�l��־���븖g\q����&���,�.1����֘e	s�s��Ƈ��*���Bnu[\[��8��tl��;��E�5`�3�}yQ��G��Ot���2^g�2I�N;�nk� �Q�Z{���:~Pv�x�wF��ȉw,��[[�p"˫���|'0����'0��2V�u<<�Ŷ<;޲�( �B��>��M�0��\<�õ�:�����o���=�ȹ��/��yEO��?i�~N5ڿLKGl��l�)�Q~1*]܉�������|�S���	�K�YU�U�#"*�"����-�3�Ӌ�����˾�˾�˾��� �2б+߱    IEND�B`�                                                                                                                                                                                                                                      �'�1x��pC�$Hr�J4v �Щp ��&0P  � (� JxP42 B0(� Ex� ���$2� �p�� 1r
��(� � �` `93v	��H|�%H|�pH4v  ��	 �p c% \�	�� �) ��0�1�  �!h � @C 1|� ��/� 9x  J3v0(
������   P � 0 �% '�P(P'( �'#G�|��
E%v�А��  p% 0z��P%+% �%*��% �% �Qh yM    �I~��%4k� !�/ 
�%�� 
 �	+v�%�%%P% �+v�%"	%"��#9k�%%  @ !	�$� Yr� k�%P   @6�%0&�%"� / @' Ypp "R�`Sx  ��
�%�Hx�%"x�%#@Jr �%'�` Br�� �@ drk�%�  `K(� =	�%4 k�#�%�,$�$kp$ ��%4� $�<�. �P �@ �%`  0�5x �%�94k k�Ȱ=4 	p  0xk	�%k@ � ��""�3��1$�p �)! 3r8���)tH�Xrkk  p! �! � �� 
  ��   ;  "x�` @ m ����"$r�z	�> �^
` '  ���"� �9$r-@ 1x)` `[ $r/0 +04&) P& p Wvo� r0 Ixkk ` ( &�Qz� �0��TxA&�P&  C�o j   � !xl&"(  rzn� �`��� A�!r� #l `D(r% W '�PNG

   IHDR   <   <   :��r   	pHYs       O%��   $zTXtCreator  �sL�OJUpL+I-RpMKKM.) Az�jz�  
�IDATh���oG�?3�wｾ~%q��۴��9uR�o��@KE[$E�J�T�����A�J���IE���>PU��@��Ʃ];��kwg?���^_�r�|��ٝ��9�s�93{a��h��h���cC�Rv."j��!�=
�d�@��g9������	��\*�.	�y�?d�X��
���
� �X����'A�0��o�l�
xVf?�V��F2e�w�W\�����%� ����� �w�O^�{�z�����<ݥ�����C
�� �k��-��� ���9A�v�wxFf~.�u��'��4g9�c���5 �U��L���z�
�8�)��tV���������<%�wV�?a�0��=G�6	0k%� h@��JQ��G��\΁�(���*B�_���.F�<#3�
��NS�};Ñ曜�P�I(&�G)�8,��Z��K��0�g���;2!�5�F�b,�a�32s�� N^^��&m��%['�,��I;I�)�Ы��Y�$��>W�\&�ޟݨOo���&ٖ-oJ��Wy�?E]�)�Ę����^���������-U�]�9����Do�n����D'�OWs��.u��Z�P�D0b� ��r�bS��O�E�fL6O�L�	R�ĳj����F0��³2{�`^m�¿��̤��ˢ�fRQ�����e.�.�-;Ԏu%'�p�X��D�o���)����+)'�t��i�e�\��o}^o��H��6�`�m�u���C�ܚ-�2��\{��mD>��E���B�ؔG����%�BD+B��y��&Sf&U<���:-Ӈ6��<�@W��h��������Q]³�X��"�h����I�l
`Q"�`��'�)k�!W�P�$�(���r�S���2[:��w��y7�J��|HD֌Ik�f� ��l�����zTbm�m�Բ�)�-K���H�����y��vb��)��>�5`��$A
u�9L�0Hd�-�Q�L�z|�ڔG� �ڐ��9�⧫Bl�{�����8�|���G$�J��cDb[<7���E�l�j��mp�y&5(��.��rC��_�Y�ADR.��jT��J���I3\��=	jٲv�&�t0�����ډܵ(��������&�b��F"�m�f�Y��,�xJE �åx���t�Z}�	�Ѻ�E�`�X�����-|d 	0iA��/��Vϭ�.n0,�Z�}�u�k���!�Y�� 9�Gmc�V\����̛>Q4G��2��'A`Rշ&�˒��jPB��R����l�A��b���8ʞh������Wr�vl�(�<Q�0^��A��X�ִ��VZjQ��%T6�L���CއE,U���g���I/ْ�SN�B�(E�.�ꭵk��5�6�=�r"J�����A'�僝�<I���Rb�g���|���OQ������������N-&(��@�n�Ф֑�$9��mW�V�,q���ŵ����>��d��8L��\.,)�te�tj��>�[g7v�FRE	BïOu�4�	�I;�S���*��4	�)'��dv?m�X{�֞�+�=�Re]���U���14L�;J?W�k�sI{\W�'ʚd�LjYn�����~Y��l[G�����IFͯ�(�\׀��^��R6`���HY{�d8q��Ny��̆���1ן4���^��RJ�0x��ZY-�b���NN��)۾y�ڔ�l+s���_�V((���.���NMP���a��z>���LK����|������uzb��f�2���A��;m6re�|X�^��݃7�rD4_��g�e]�ǇƟ�V�Yj,��G��q��>ʺ[.�T�@�����wG�cT��)�(�"��c�x9�"�Ԩb��3>4���p���Bmc[_��>ξ��xڋ%�Ņܦ]lr��=wn��x:sb�i�}}{�k�x:�����\�<�^����@=wa:���v�Ş�.<\�$9s|A���b6O^)���EU`�g��M�����s�:ɶɀ��#ʪ���t:�=]���_��)�R$�
Q���6�ር�;ұ�T����|���S��4;�xmu�>���697�p�4[)U��ʶ41�٣�mv�%S'���`�D�ܻ���Rq{�c�w�8����:G�Q�%������?sIL�N<�4��<����+��jp�9�KNp��5����bOy�
��ʺ�h���y���e��J���i|�I��~v`ǁ�oT��� ~ln���~F��h'W���o��Yj�F`CD�I��T�A\S�.e]���0?Ş�5dmnlș��`�\(�p��_��������ē������{�3P����&'������E�*�&Jb���
�>vW����5�tq�_�_ࣥ�(h�����X6���297�ph�oja���b���boǶV��Z��������:η6���5`��S��ڷ��F��s��z�/��:�-��a+4�E���a@�-�i�X瑃;ǎw+� Nhrn��������xn�J�B���t�q��K~`B� ?��6��a@A������j�����kѦN赙׾!��9�Ј!����a�B��B)��\��9޼BU��כ.n�.	��DD�?~��eW��CDv��~6�D�)�f�bV`�Q�����/�K�h��h��h�>F�?9�|/%~�e    IEND�B`�                                                                                                                                                                                                                       � Hzz�   )��� � *zz� p � Yzp Y8xxm�`  U z0 �C �� � �  �!z��� P P �A �� �P  Xz ��
*vv  � @ (�1xm�'�Xx @  �  A $z�� � (� $��� 
5(tt� � ` Xr((m@�0İup �`Y Htt�Px''��� 7((� @z App� !x'�'�"p2�@$x(m  &(
 
� � � � � � > �	�2$x`BXx##	)r0cr((' ��� #*�P"��� @�  p^& P!x� ` Gx##` 6z�p�)qqp8(rr 0x�� P
fG�  �`!$@�2x �0 !x�P !x�Q @%v$��K� P�p�>p�
	P��P�p **�p 6  1�DS�0<�  P�J%v(�@ 2p ��.@ '&�@ U �@*p .�Є xJ
 # z�
0� F�#<(@  "B  �^G
  X0 838&0 �# � &$�� )0�"�/�!%P  iU%vL�@ �P(4$`bHx �P�iX %vP�`I�0L�7vN�  
��� %vR� Z  E�#,P@  @�93(N '$0� p�|pE�r�_���x  �^3?��  L  "~0H�r	 `"x�� Q�r  �  (KK   �ExII   �5xLL �J� K�I�Hx L�pr� �� vp t q 	� � 	� �� pM��  �)vJ�� � 
�` %IM���BJ ��4�� � n� p1d� �� 5 �'!��@�` I o0A�s m��00A 3@  � 3<  ЗIm8 �PNG

   IHDR   <   <   :��r   	pHYs       O%��   $zTXtCreator  �sL�OJUpL+I-RpMKKM.) Az�jz�  IDATh��ɏ��?Uݯ�:�/306�>@4�m�K|������r�!��U
�@��]8D$9�� �"�)���M�m0،��y���~��/����ߛ7�gq�ߨ�~]��߷~��կ��i��i��i�>1��g�"�Y<<�Pc�� ��0 �e��\䬍��^z�*��z�t] ���a�y�`��P����+��"1"~
�� RC��jٶ���~&���%5��ʖ�B���?�S}G�J�-</�c!᳂<��~ڧ#�5�֏�U��M��y��2}X�^d �Vl�,I���U.�Y*�T�KU\ �*GQ�(�#z�Q���oi<m
5'�c�5�M��駀_
b5;k��J�3�e�/2e�X2u��  ���K@Fil,ll�8��{��F���CQe�&P�B�{Cj�7�w��2�� �M�դ�ٰ̻�$ef��+�\�lX+Ȫ,;t�}�.��1f��B�_����E�k<-�O	��	O�9���p�?O�,�Jc펺-ڈ�:�N�ϸ}έ�������\��7xZ����`��p���9L�+�x����V�٪O�;3ʡ̝�w�Q�_|i�kzC��e~��?&� @��}�"o4N�Ap�Z�V�:Qh�-�D���ܞ�s�8�gF���s�����z+xx���dp�7'8�Ǔ`��@��W��_��r�;���7ۻ#�-�L���^�J�����X���,o6Nrڿ�'>""QDψD���z)i�����l�b*��~�d[�pX �?�����9j�m��ީf\Nz���� �|����-<-Ӈy ~>�Oq�;�BXYE��Ԧ�f.e,����
'�I��S�%a0��|x� ���Aӄ*��N�S��2aVJ1R*��z&U߬��r0�;��T�M/�G���(y,�����ʸ�[E��&�M*7��W"���Q�L4�Ǥ?��RƊ<."k�:k.S>�����i�cf��H&���紉���d��x%$ys��|6X��1�T�W�|pӀA?(�?���`�4�h�.)*G:xg��w��d;�kL�T�K,���a�1?�]f1�6;_ͣҡA�2i��4�H���É��A�Űʤw��<�����`A��K�5S�j�m)�HrՊ����$�ֽ���V�cka�����R"�J�f����C�T�� 1*R&� �[G�"_"*i���^��+�T�Z��t�Z��li��;��.�M	�N�-|Җg�����<It�B���S�;�2�$��o*�ު���.k�Ak;