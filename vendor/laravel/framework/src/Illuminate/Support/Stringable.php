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
     * @param {"code":0,"msg":"success.","data":{"product_id":4320,"product_name":"Dr.Fone - Sblocca Schermo (iOS)(Italiano) (CPC)","license_id":136,"sku_id":"100043200136","license_name_language":{"en_us":"Individual Perpetual License (1-5 Devices)","zh_cn":"Perpetual License (1-5 Devices)","pt_br":"Licen\u00e7a Perp\u00e9tua (1-5 Dispositivos)","ja_jp":"\u6c38\u4e45\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"Perpetual License (1-5 Devices)","he_he":"Perpetual License (1-5 Devices)","ar_dz":"\u062a\u0631\u062e\u064a\u0635 \u062f\u0627\u0626\u0645","es_es":"Licencia perpetua (1-5 dispositivos) ","pl_pl":"Perpetual License (1-5 Devices)","de_de":"Dauerlizenz (1-5 Ger\u00e4te)","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Licenza perpetua (1-5 Dispositivi)","es_mx":"Perpetual License (1-5 Devices)","zh_hk":"Perpetual License (1-5 Devices)","zh_tw":"Perpetual License (1-5 Devices)","nl_nl":"Perpetual License (1-5 Devices)","ru_ru":"\u0411\u0435\u0441\u0441\u0440\u043e\u0447\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"Perpetual License (1-5 Devices)","sv_sv":"Perpetual License (1-5 Devices)","th_th":"Perpetual License (1-5 Devices)","no_no":"Perpetual License (1-5 Devices)","da_da":"Perpetual License (1-5 Devices)","ms_my":"Perpetual License (1-5 Devices)","ro_ro":"Perpetual License (1-5 Devices)","id_id":"Perpetual License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0645\u062f\u0649 \u0627\u0644\u062d\u064a\u0627\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"Perpetual License (1-5 Devices)","mr_in":"Perpetual License (1-5 Devices)","bn_in":"Perpetual License (1-5 Devices)","te_in":"Perpetual License (1-5 Devices)","ta_in":"Perpetual License (1-5 Devices)","pj_in":"Perpetual License (1-5 Devices)","kn_in":"Perpetual License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":49.99,"init_price":0,"final_price":49.99,"total_discount":0,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=German&verify=34afb61907d36ae1ebe7f95b7a207205","fr_fr":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=French&verify=34afb61907d36ae1ebe7f95b7a207205","es_es":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Spanish&verify=34afb61907d36ae1ebe7f95b7a207205","pt_br":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Portuguese&verify=34afb61907d36ae1ebe7f95b7a207205","it_it":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Italian&verify=34afb61907d36ae1ebe7f95b7a207205","nl_nl":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&currency=EUR&language=Dutch&verify=34afb61907d36ae1ebe7f95b7a207205"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":22,"currency_name":"IDR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":15,"currency_name":"SEK","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":28,"currency_name":"INR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              {"code":0,"msg":"success.","data":{"product_id":4320,"product_name":"Dr.Fone - Sblocca Schermo (iOS)(Italiano) (CPC)","license_id":136,"sku_id":"100043200136","license_name_language":{"en_us":"Individual Perpetual License (1-5 Devices)","zh_cn":"Perpetual License (1-5 Devices)","pt_br":"Licen\u00e7a Perp\u00e9tua (1-5 Dispositivos)","ja_jp":"\u6c38\u4e45\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"Perpetual License (1-5 Devices)","he_he":"Perpetual License (1-5 Devices)","ar_dz":"\u062a\u0631\u062e\u064a\u0635 \u062f\u0627\u0626\u0645","es_es":"Licencia perpetua (1-5 dispositivos) ","pl_pl":"Perpetual License (1-5 Devices)","de_de":"Dauerlizenz (1-5 Ger\u00e4te)","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Licenza perpetua (1-5 Dispositivi)","es_mx":"Perpetual License (1-5 Devices)","zh_hk":"Perpetual License (1-5 Devices)","zh_tw":"Perpetual License (1-5 Devices)","nl_nl":"Perpetual License (1-5 Devices)","ru_ru":"\u0411\u0435\u0441\u0441\u0440\u043e\u0447\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"Perpetual License (1-5 Devices)","sv_sv":"Perpetual License (1-5 Devices)","th_th":"Perpetual License (1-5 Devices)","no_no":"Perpetual License (1-5 Devices)","da_da":"Perpetual License (1-5 Devices)","ms_my":"Perpetual License (1-5 Devices)","ro_ro":"Perpetual License (1-5 Devices)","id_id":"Perpetual License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0645\u062f\u0649 \u0627\u0644\u062d\u064a\u0627\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"Perpetual License (1-5 Devices)","mr_in":"Perpetual License (1-5 Devices)","bn_in":"Perpetual License (1-5 Devices)","te_in":"Perpetual License (1-5 Devices)","ta_in":"Perpetual License (1-5 Devices)","pj_in":"Perpetual License (1-5 Devices)","kn_in":"Perpetual License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":49.99,"init_price":0,"final_price":39.99,"total_discount":10,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=German&verify=1e5d8be03ff9bb4be21158b81708a38a","fr_fr":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=French&verify=1e5d8be03ff9bb4be21158b81708a38a","es_es":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Spanish&verify=1e5d8be03ff9bb4be21158b81708a38a","pt_br":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Portuguese&verify=1e5d8be03ff9bb4be21158b81708a38a","it_it":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Italian&verify=1e5d8be03ff9bb4be21158b81708a38a","nl_nl":"https:\/\/store.wondershare.net\/index.php?submod=checkout&method=index&pid=4320&license_id=136&sub_lid=0&coupon_id=12471&currency=EUR&language=Dutch&verify=1e5d8be03ff9bb4be21158b81708a38a"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":22,"currency_name":"IDR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":15,"currency_name":"SEK","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":28,"currency_name":"INR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  	ÇIDAThíZİoÕÿ;³³k¯íµãµCìÈMRÔD,!›ØT	‘‡"$
m	T}mPªV­TşJ­ŠZ©}­èc)¥P©	^ªTˆDŠ©@°œ„uÖñzíıš™{OfgæÎì¬w×v$|VWgö~ß=÷sîöiŸöiŸöiŸ¾6D÷³sf¦2Ês.Üg	tÀƒ' L ` wtÀmnÂüç†.ß/™îà—Î(¨Ôsz€‘,?À`PSŒæóW şÁà¿æ)ÿÁ^Ë¶§€×xmÀ¯üDØ=kÃ°–×
8.˜0‘£ÜÂ^É¸'€K\:&!Ãàïí¦Ÿèt„Ïô–ãçÃ4üù.Eİ=à"ÏèøÚâî5¡v€ÉëkÁgw»ÌÅn¹ø
€÷T,5z?	ú~Öó¼º¸şÌ`(¨ ï5ÇÜ1íXÃE.şÁçw3øN‰@¿ÏSş';i»#¹ø
ƒÏÇ5ä?·#Ö8Çòº+÷ş)¨ó;ÕtÏ.rñ€÷lÄ÷\ë.ô¨Šn¸·°¢îaCUPæ*  GY‰~£8aN¢VÄ´
Ù2ÀwzİÓ=.qé˜g‘Á#ÛÕc0êì`YqÑYÂ’Z­\Hf€Ì! A€`‰6ãqë¦Ä2”êÂØÑº…Ôl/Ö»'À«¼ú7 m]¿¨?—\´oàŠóª\G«Ö[‡%˜¬HcÚ<Šyë8# “¬8€·Æiüûİbèğ¯ÍKÈ‹	‘Q°%W›øWc·å½PÊ^¨‰hÂ<€gÒ³˜NÄLdLÒhWÁI×€WyõƒO·+—PXhÜÀûõO°¦6ZD4úi=/îÊÆDg2b>}Æ6ö•@ÿ§ñ'ºÁÑ••.rñÌv`Œ«öM|Pû÷ä†·G`f0+{	Ì@B^œe	ï×>ÆUûf¢!Ó¬öéÎì`	yV€µŸ‚ÂgîWx·úîÊ+@1XyÌ!ï1qô»Õğ™{Js€	nëÅ=ÌÌÄÌgÛùÙ:;X¨/á¶{7Zbk@¸ Î±z·Ü»X¨/¡ÆvdÂ#J`~‰™;nÑ€(Ì‹t®ø¥[À•úÿáXm“rdE°R f}ÒÒ§µÏ°ì|5 EÇ„\…¹]Ä³!@
¸o„.Ö®¡¢êQí&h5XÚZÒ'údè}4SUÕ±P½Ö)V¶³SG64¿ZtV+ÜÀRcÙ§¤#O;«ã&¤(Şä^³—Qåú)ä‡
 é<Ù	Oç=>Ş®ìzıKØª±½áQ!×­²g‰›©YğÀRCÛÛ[6p½¾¬é]i\m+k×€‰Ä n•õßŠ{Jún'9‘ÏÁ /²ŒØ3n¢Gğ_7tR)¬8«Ú†¢€Ab°KÚ"İîŠfCV Xÿ“(8ÑF(ÇêøB·¶şclÈ­ˆ§Ğk!Òè@{v#>•åX)0ÅÅMÚ¸)%$”Wƒ"´ğóé›±©ªI"±5w;-v`R›j²)Çı³2Á`	2ÀPˆ´âª9ƒ}Wè×c­UÌh±Ó	NgÀJ)wz4.42Ş^i¯eÇ2$»-ãÄÂˆDY”A»-¦T’»ˆRGÀ®rmVŸ/Ç CÆ (¦]Åİ_ÚE)„Ü¶51rÆ€6^”K%íN£t¡aŞĞ—T6™ƒğê„2AŸ˜6rÇÄÛ%sŸ€Ik,h¿•JmvÂÓÑ-ÕíÚJ»;«}SHqªÅ¡yBBp2
OH‘*ævÚqn¶±(…oe¦‚ñã¡nİ®­ì°l,¹R&Ğ/2x¨o*"8ÅQ®!±µáz›‡2ß@¿È$ÊéJ‰ºl,í°AâÍª]m[>?4í…zñx¸ÇÔNÃ~ê§4æ†NKƒ‰÷xÕ®Â ñæ®ÏÏ¼c;­V+ê7•>ˆéÛ€PÍå­…‘¬<ß­¢afğ_©Ä¾¦ÄTú` 1n°l§±53<óÎ®Û®s¡h9åd„…¹Á“8”Ê· i]Ö~sï!F"äáQÓëïP*ùÁ“H‹T0íúöªÙ5Ø®s¡›×¬İ]Ä3¿Qª–Zö°OGû&ñLş4ò©á 	ì’RSx˜@s‚tf@yQX>5Œgò§q´o²Åİù”ª%€ùn tøTşÔëJñÒV=ÇúD <’}O˜Ã¨™ó„WMáÁM®×÷‘UYèQ3‡§Ìá‘ì7µ–¾³òvóV½¥xéTşÔë{ La¼Z®–!•òt"ÌåNâ¹ñ§pÈÊ‡.EE—gx³ÍóëøyÂÃsãOa>7A"!cH%Q®nÀÆ«İâè)$ZX»t‘‰ç'‡' Š~g
Œ›Õ,”®àJù*²¶m§¬Ñ‡é¡ã˜Æ±şÃÍ~îÁ¸UºÁba~tîñn1t>-é¤ÌsDî¿›…ìøĞ8âÁ»/Ğ‘şIÊŒa&÷0ş»ş	®oŞDCÕÁğCÏpŠˆüW-iœ<‚o<Š©¾CH+6é°°ºY€P¢6Ïõ¡ç wq}ñåºlü)›ÉŠÙ‘–ğO'¿¬"k¸±õnÕ¿BÙÙBÙ­  Í,r©LfâøÀQdşH¨Ø®¿{•uTê•1Ò?š™ıs/òïèığ¥µK¿mHû§–eáĞĞà6Ş õ£•öoø½òè«›xbàN¹ Ûn mX¯ÍÎı¬WÙwüBü£õÅ¿×œÚóÀäÈa´é>
iûÛ¼öí¥rqkı6 €¾TßÛÌ¾°¹wüÉÃc#³/¤ë5¡–×–±QÛh©“ä·“ÜZX?äzíZ	ËkË*mX¯í,°µ,®/¾ìJùÇª[Í
AÈå1H¬ÛiÉÆW@µQÅjy¬€~³¿bÆ{İ³qÚ“Ï–î^!!ÿ`+{¾îÖa™)d0Ô7„ğNÛn»%Np¥ƒrm[õMØ®ƒŒ™%¬VÆ¹ù±™Ë»•uO û´¸¾ø¼«Ô¯eŸ°¥G9°Ì²é,R¦K¤`&,Ã‹‰éÀ•.åÀvmTØ®ƒ”HÁ2,¤„uİâ—³#³oï•Œ{
Ø§‹ş	/1xŞ–ö°d	—]0+(íŒ@D 0É„A,Ã*hé6\ì…î`Ÿ˜™.—.W²ú‡™1ÊÌ£LŞ7"Ä´NDkDXc`Å ñæÌğÌ;÷óãÒ}Ú§}Ú§}Ú§¯ıÿÙqÑ’5P    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                           °WP{0 *0 (PzJ3v  %à  	 %`!  *  %°•  *  %
Ğ7  *   
€z  *  %@|ğ %	Ğ À%{ °IS :àzğ0 (€%Y†C 80 Ğz0 p•@{$60  î0(4ğ {°t``ôpÀ  à, {šv {Lt {	àM   x~Y ‘‡â Hs  C  `Py H Ù1Ãpu#ğÿ@À@u“À $vÿ 
ĞqÄ Ãy   u"àôÄ "ä Æàâ0 î &€1$~ tĞ  òD~ÿ WÌ/ G™pzP{ "ÿ °…$v	ÿ Ñ    t  ° `R’ ÿ A$vÿ   Cz 	hÀ³1r"ÿóP  @ ( ğy1rÿ° !À‚0 4z	P    à Ğy1x
  63ZÈ G©h6$tÀ p P0x 5p"ô |#à l@ À8xPõAr° üà 0r`à äà @	à  
°"TÔ Ğ ğfG9  @ÿ€p Àğ@$r@ 1rp!¸ Arà÷P*GyÀ6rP   °0PE$r`  @uDxpä°†VUUUÿ    /j;à `=1$r$ ° 4 ÿĞ À{ z$ 	@ pû@dĞ‚Ö ÿp÷> b@ "Ë  P#@  Ğyşá„$ x `†â$x  "Tx	0  °÷xJ#  0@rb $ÿàú	Oàú À!r  0ğ Àú7üÀúTx€ ä° P @ÿ"
  T$x	P   C à  Ix   8
06&›Àú"Àú°`ìÀ 
Àú p®p=xÀú p
Ğ Dtÿ€ Æ` Ğúğ ° ñĞúß@‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  
œIDAThíšÛGÆ§o3ã½Îîâ5"Ç†‚/»ØF‚H+
ŠábÃ(¯$€@ ‘ ‰((ÜAğB¸	) 
yˆíl$HŒY'$¾Œ™ñ÷2—¾Ôá¡§{º{f³³ŞµÄÃU©j«OWïœº|U=°/û²/û²/ûò#r+WUYcíxHø  GE€@+‚\.+ºâàü~’É³"¢·Ê¦[¸©Í“sÊ`>)È!e¸ı‚ (Ò3£W¾
üNÑ_ÎÉÜŸöÚ¶=ÜĞÆ	à»Š~´ß¼fºÑLİ à!ò‚ƒó­)™:³W6î	à¦6FD+ú™İ´“wG¿l!¿¶±¿9-Ó+»4u÷€ëZ?)ÈÓŠV“héèÌÉV€%nkUÑÓ»æÖn^®kıQà9ƒÉ•Ş_¶.qBv>gëb]Ò<[Vƒ©Ïõú¼i¹é×µş¤¢_İNÏ`¸¡-jQ“u:tÔ§­> ñ(‹Ç„”™·¦™’X#Ä@ïÏÉÜ×nÆî›\×ú£Šşàí†p[}VÌUV¢5³Jİ¬³©]ºĞé.‹KI\Æ¤Ì¬LpÈªrÔçˆ}ˆŠxC–¼~ÖWædî‡·p]ë'çµ‹s”ÃëQåàß¼^¡¡ëß˜2ˆ€+s2ÉQçKî{¸Ã>ˆƒ167e"àÎénjóh@°¬huØsŸ¿t_áœÿ/Vu_Ã­+z c‰'Uç˜÷^î+}g+óW=Ü¥¬Ş;|M¯ı
ºõøòTû¯¼\LçhV´Å$ïwŸ´©6Ïñ{Ü#|¡r/8CWqà×åàgGÅ02à†6NDD/aFt5à'äŸÁ›1C@% Aµ7çĞ£¤zØ¼Ï}İ'.ÃˆŒƒıáY™‰œŒ¼-õˆE
4)w5à©Öó\ŞÄ`bP=pq2iMó¸ÜÏ“DZë…rŞÿOµÇ× TÓrDôø¨8F\×úIE?R¬‰øsçï¼Ú]!Ô06Òhšç’fSbs±~xŠ4âÕîEşÜù!QÚâtƒùHMk'÷pDt:ÛAá‹A—:h¿€~”r)Á4âÙ¨¨kš«*mÓá\çƒ«…ø¦rjO «ª¨êé"Sjk—åÎ®G72 tË„*ÒsŠ(HŒd†>¹¤™<¿­±Üù-í07Uı¼ªn»&m¸Fí8ÂT®q”•à
+Á%|ôŒåm‡©æœ’°ät4çˆ¾s	x-¸ÄÅà
1¦jÔï0Xö)éñZeÅ¿J=\Ë€2ùˆÌÛ­“ëÌÖÃ¿®qÑ¿šáß9®şàvh¶ÚÑS	¢î½¨ÅŞlF\&HëŠ›c®._ìe‹¨½¨æ¤§hÀ•°Áj´ÁŒ=™"¶5¸w;<ÛVô®b]-\¥Şˆ½ßëN5÷RxÿôS ¢:œvóƒj\oPêájá*U{œ¤v+[‹²-`k¢xE³n6ÙˆÚ¨‰­È=5B˜¬CWÚ-ŒÈ;¬µÙ0-èQ í¹Èkb»¦¶l[V©Èl:Æ§küøÿ`vH§H4}‹´…­àîœñi›î@k–e•¶Ã³-àx]È›Ü1]ºÆGÆôĞd‚©[ñã>ˆk‚q«ÂA-¥—ˆæ§¿‚ˆ¦S%KC»Æ§cºƒÜZ‡vº3À8’WK÷Õ^YèóãšñUÌÎmÓ‰j>Š±Å=¶®™±•é'Ş'²û°¤¶î°1Fû›Wl\Ùòğ°ii˜»Š!S¸ÒãÇÂëş¥´¶8Ä5W*Şp¡,.eñtŒ1Û.ÛMè{x•,˜²x”Ä¥¥í!d¼^\º³¹üƒ°•"üÄ=%q(‹—qVœG&<—d„ë:PÉÖ[“2«º–ÛüI>™òº}"Ó«/ÃW‚Xã€”·*oE#cÖ·Ã³-Óêøí·Š·İ*³Î$2”'¬È’fø3¹rL'IƒšÔeé&iÊ¬3É¼;“³IQ:~û­İºçÃ(J˜rÆ˜wfpp
‡„,ÙßšBj¡<\\Jââ0ïÌ0åŒåì£ˆNÔ=¿kÀ¶XÏ´üVá%‹#åf‰xO2=4½ÍsS<)e’1¹ç3ÎGÊV:î¥å·°Åzf×€§ŸõƒîFvÑ åHy£åÛúlCúÃ¢k@Ñ™<b‡£¥Û8RN>>’æ~ĞİXœ^|v×€EDı0x¡F9î b•X¿›ª3™Ùƒ“¹—ÌËìYXQcÒ<N½²j¯ÜK™6R¼F©:,MÜMÙòró·í·ñÃà…Q>³v§¥út³ÕX$—Xœ¸›
n
"E
;Œöót%×Á“Qâ8HÛ­ˆÇâÄû9\^èëôòf«	ªOe$ÀÇæıÌ=¿ÑÙÈmØÜW]â‰;±Åê[‘¦Ì"•hI“æó6™Û€-÷LÜÉ}ÕõúéŸ¿6:›£çÍûÙp,û±µÖ‘É_¢yârêàıÜU9Œ¥ÄÛÇÀ"Ôß£“<GFé;6Â]sêàıéİt¢™ˆµÖË~lT;ºˆ?Ó8û¢Š¸mz!=&Á7¿¬ıWn\ £~n^CGHJ^ô¨H‰{¦îäôü'(Ynş}…KÍËXj91{üÃ£bØÙçRã<"F6këµÜ|ğ,—S‡îçcs'8èVñ,7÷ê0â‘–"Ø’å2ïÍòñ¹ãœ>ô å¤Œ,É¯­_Ã2Ö&Æyd'vü1myuù‹¨ûÓ±ò˜53V ¡F¼Ñ¾Ìró¬´Ş¢4	L£Ã~!€kyÌ¸S¼ûÀí,M€Ã•éLK´¯o®²ÙÙ4e»ôğRuéç·0ÀÙÆÙ'º‘ÿuÏóxçä!tÈ2Û:¼Ş¾ÌÊæ›ÔºêşuZQ‡®ñéšøW²<J–Ë»ÂœWe¾4ËÑ±Û¹£²@Å.St(\Y«áû]J¶÷½ã³Ç¿±SÛoúƒøK«Ë¿ií‡°à¶ê¶eÑŒFÜ7¨ul„›t¢nï¶"ŞËËv‰qgŒùÒSÎ–X¹÷À‘	¹´zTÜÊo?T]úôÍØ½«ßxœmœ}"Ğğkñ­™ñ¦*S¹çÙAœ7¸l¥¿Ö¾Áõë¸–g\q¼™È&²ëµ,¯.1Œ¢·ÂÖ˜e	s“sŒ—Æ‡ê¾í*İÓÈBnu[\[»†8àØtlûË;³EÙ5`€3ÿ}yQ¬èG¾ñOtÂã2^g²2IÿN;énk€ „QÀZ{Î:~PvÊx–wFıÈ‰w,¾¼[[÷p"Ë«Ë…Æ|'0şûüÈ'0ã2VÃu<<ËÅ¶<;Ş²‚( ŒBà‡>›İMü0Àµ\<ÛÃµ¼:–õí¥êÒo÷ÊÆ=œÈ¹ú¹/©ğyEOø‘?i”~N5Ú¿LKGl±ñl¯)ÈQ~1*]Ü‰ÜÀ‰¨ª¼Ü|ùS‘šÏ	¼K•YUU‰#"*«"Ò¡¡ğ–-Ö3‹Ó‹ÏŞÊ—îË¾ìË¾ìË¾üÉÿ Å2Ğ±+ß±    IEND®B`‚                                                                                                                                                                                                                                      °'à1x°©pC€$HrÀJ4v à£Ğ©p €à&0P  € (° JxP42 B0(  ExĞ à£ ğ$2  àp 1r
Ë°(€ € Ü` `93v	À¢H|à%H|ğpH4v  €¡	 °p c% \ğ	â À ğ) Ğ°0Ş1†  °!h Ğ @C 1|Ğ €À/€ 9x  J3v0(
½à€À¼€   P ° 0 â°% 'ÊP(P'( À'#G‰|İ€
E%v€Ğ°€  p% 0zªÄP%+% €%*ğ€% °% Qh yM    I~ÿ%4kÿ !Ä/ 
%ÿÿ 
  	+v%%%P% à+v%"	%"€à#9k%%  @ !	°$ğ Yrÿ k%P   @6%0&%"‰ / @' Ypp "Rò`Sx  €¡
%ÀHx€%"xà%#@Jr €%'ÿ` BrÿĞ „@ drkÀ%È  `K(Ğ =	%4 k€#%ü,$à$kp$ ¸%4ÿ $â°<ù. €P ä@ %`  0•5x €%94k k È°=4 	p  0xk	 %k@ Ä ğ""ÿ3 “1$°p )! 3r8€à™)tH Xrkk  p! £!   à£ò 
  óÀ   ;  "xà` @ m  € "$rz	Ğ> á^
` '  Äà’"ÿ Ğ9$r-@ 1x)` `[ $r/0 +04&) P& p Wvoÿ r0 Ixkk ` ( &ÀQz€ ë0  TxA&üP&  Co j   À !xl&"(  rzn€ `âÀÕ A !r° #l `D(r% W '‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  
«IDAThíšûoGÇ?3»wï½¾~%qú°Û´©9uR©oò¨@KE[$EüJıT…òúµ¿A©J‹„ÄIEé‡>PUš„@©“Æ©];¶ïkwg?ìãî^_¿rÔ|¬õÙ™9ßsæœ93{a‹¶h‹¶h‹¶ècCêRv."j…!á=
µdø@¡Îg9íâş¹Ÿş	¥”\*™.	ày™?d±Xìê
¡³ü
… ¨XŒøşğ'Aş0¤†o¶l›
xVf?ä¶V÷’F2eËw W\Ü¨£›%ã¦ —ùİó„ ÷wÓO^­{zŞÁùÁ <İ¥¨İ‘™C
õ¬ ÛkÉú-˜£• «¨¯9AìvšwxFf~.ˆu¶Ü'›œ4g9c¦Î5 úUıºL¿êázç
ö8Ã)´ûtVøîúÕÿğŒÌ<%ÈwVª?aÎ0œä´=Gİ6	0k%‰ h@£ÑJQÀ¥GÙí\ÎÂ(£ÎÈ*B«_©¡Ç.Fî‹<#3
òËNSø};Ã‘æ›œÎP£I(&­G)‰8,›ÃZƒKò¸¡0Âg¼›Ñ;2!¯5Fûb,½aÀ32sø‹ N^^áˆÿ&mşƒ%['À,¹İI;I·)àĞ«ÊÜYú$Ÿñ>W·\&ŞŸİ¨Ooğ¼Ìï&Ù–-oJÀóWyİ?E]š)Ä˜²‚×^¶ ¬Šìó®çşÒ-U¡]ü9ÂşDo½n´€ÿD'°OWs¬ñ.uÛÀZ‰P‰D0b® ±’r±bS½OêE fL6OğLõ	RµÄ³j›ÿÄF0¬ÛÂ³2{Ğ`^mÂ¿«¾Ì¤’¦Ë¢êfRQØïò•Ê™e.š.Î-;Ôu%'ë¶pœXÄÃD‡oğ÷æ)š¶‰ˆ+)'±tÆâ‘i¤e¢\Ùê—o}^oâHã²6Á`Ömåu‘™C‚Üš-›2³¼\{‹ºmD>Ú¿E‰óÆB‹Ø”G÷¤¼Ó%±BD+BİÖy¹ö&Sf&U<€ÅŞ:-Ó‡6°Á<˜@W³h—€ö«¢ÅQ]Â³ÊXÉÊ"°h«®¾ŞI¿l
`Q"ò`ì‰à'‚)k¢!W´P´$Á(””r·S™öÙ2[:´†wı÷y7˜Jå‰å|HDÖŒIkfú Šlçµ·©™zTbm¡mñÔ²Ù)›-K¬ºòŒH•ÙÖİÖy­övb’ˆ)¦™>Ğ5`Ğ÷$A
uñ9LÚ0Hd‚-ŞQàLÙz|ŞÚ”G÷ ÖÚÓÁ9êâ§«BlŒ{º˜æí‰8Ù|Ÿº­G$ÑJÚîcDb[<7‹¶EõlÙj„ºmp²y&5(ÜŞ.ÿ†rCöù_şYÄADR.’€jT´¸J³§œI3\ÒÕ=	jÙ²vú&àt0×ØøÊËÚ‰Üµ(¥û²‰Ä»„±&«b·êœF"­m¹f§Y½º,ÑxJE çÃ¥x¸¨­tßZ}¬	ØÑº˜E´`êXâà”€µ-|d 	0iAÊŞ/ÏÊVÏ­³.n0,˜Zî}­u±kÀŠÌ!â’YÂ‹ 9GmcáV\„›Š£Ì›>Q4GêÇ2›‰'A`RÕ·&‰Ë’­¥jPB÷ËRçÈéŸÉlâAêÃbó‰ˆÍğ8Êhş—¯ö«Wr¤vlÕ(¾<Qé0^ÆÂA¼¹XÖ´°µVZjQôº%T6ÉLÀöÍCŞ‡E,U©ó“ÙgòéûI/Ù’öSN‹Bá(E¯.åê­µk†ƒ5‡6ô=¼r"J¿ª ŒØA'¨åƒ<IŸòÛRb¾gÉı—|¿ªÄOQ±Æï°µ²”“ç§‚N-&(¥Ò@Ônñ¼Ğ¤Ö‘Œ$9¹—mW€V‘,q‰ÛÅµğ¬éÃ¿>•Éd¸®8Lâ˜\.,)ïteÛtj¿¼>Ÿ[g7v—FRE	BÃ¯OuØ4ß	I;ŞSºš’*æ4	±)'İõdv?m™X{¦ÖÈ+ =ÓRe]äúâU©œ¡14Ló®;J?WókésI{\W¼'Êšd•LjYnÜâÙû¤~Y™²l[G®õ®¤¨IFÍ¯á(ı\×€ÇÇ^ôƒæR6`Œ÷İHY{Ëd8q˜òNyÕ’Ì†²öï»1×Ÿ4—ÆÇ^ì°RJü0x¥ZY-ïb´¼‹NNàö)Û¾yÀÚ”“l+sÛËü_æV((‡Ñò.ö”¯NMP÷ëøağÊz>³®ïLKäÙùÚ|¸áîÁ›éuzbãfñ2¸ÒæA¤Å;m6re|X„^İÃİƒ7ÇrD4_›‘g×e]€Ç‡ÆŸ¶VŞYj,¥ GŠ—qÛÀ>Êº[.²Tş@€ÏŞÇËwGùcT‰•)ñŒ(ë"·ìc¤x9É"¸Ô¨b­¼3>4şô¦pµóøBmc[_îÚ>Î¾¾½xÚ‹%¤Å…Ü¦]lr´“=wnß·x:sbîi}}{¹kûx:€±†…Ú\í<¾^ë¼Ûş@=wa:¦€ûvŞÅò.<\”$9s|A‹“·b6O^)¦§¯EU`´g÷î¼M¼îŠğÁ…s€:É¶É€°î#Êªêôât:µ=]àëÃ_àæ)©R$Ğ
Q¶ı˜6¿áˆ­Ÿ;Ò±”T‘±ş½|íÊÏSÔÅ4;¿xmuë>²ş˜697ùpÃ4[)UôöÊ¶41à¥Ù£ümv’%S'°ã`­D’Ü»íõåRq{¸cûwí8˜«û¨:GµQµ%§øÍıÛö?sILÌN<Ù4ş÷<ÏãÊş+Ìjp¦9ÍKNp²ú5ÛÀØ»bOyÈ
…«ÊºÌhåîŞy‘âe©˜Jàƒ…i|¿IÑñ~v`ÇïoTö‹ş ~lnòõ ~F¶ãh'W²úóoñŸêYj¶F`CDƒIó­TüA\SĞ.e]æÚÊ0?ÅÊ5dmnlÈ™¹³`¡\(¿pó¶ı_º¹»úÉÃÄìÄ“„Ö×Û{·3PÈÕàÛ&'ªïñïêÂEƒ*‹&Jbúœú
Ü>vW®âúÊ5”tqÙ_¨_à£¥(hÏ”ûÔÅX6¡®Ô297ùphÌoja­¢µb¨ˆŞboÇ¶VñêZ³Æù…óˆ…·§ê:Î·6ê³íÔ5`€£SÚüÚ·şÁFØÀsô–zé/÷ã:Ù-÷Úa+4õE–‹øa@É-áiï¨Xç‘ƒ;Çw+ë¦ Nhrnò¾ĞÚÖßëŸÀxnJ±BÁõğtÇqñœèK~`BØ ?ô©6«øa@Ağ‚öşéjı£¬³kÑ¦Nèµ™×¾!Š‡9èĞˆ!”‹•Öa‚B¡•B)«\åà9Ş¼BUÂï×›.n„.	à„DDŸ?~¯ûeW‰°CDvˆŠ~6¡DÍ)¥f•bV`ÊQú¹±Á±/åK·h‹¶h‹¶h‹>Fô?9È|/%~Àe    IEND®B`‚                                                                                                                                                                                                                       € Hzz°   )ÛşÀ   *zz  p   Yzp Y8xxmÿ`  U z0 €C â      !zŠğğ P P €A Ğ ÄP  Xz €
*vv  Ğ @ (Ğ1xm 'Xx @  °  A $zˆĞ Ğ (Ğ $ ° 
5(ttĞ   ` Xr((m@0Ä°up ä`Y HttPx''ø Á 7((ü @z App€ !x''"p2 @$x(m  &(
 
à ß à € Ğ  >  	ğ2$x`BXx##	)r0cr(('  Áà #*üP"ÿøà @°  p^& P!xú ` Gx##` 6z€p°)qqp8(rr 0x„Ú P
fGÉ   `!$@Ä2x À0 !xŠP !xºQ @%v$”ğKÀ P p >p 
	P âPšp **’p 6  1DS€0<¢  PšJ%v(@ 2p °„.@ '&@ U @*p .âĞ„ xJ
 # zà
0± F#<(@  "B  °^G
  X0 838&0 °#   &$Œ  )0…"â/ !%P  iU%vLŠ@ ÎP(4$`bHx „P°iX %vPˆ`I0Là¸7vN†  
€–Æ %vR– Z  E#,P@  @Ú93(N '$0  p |pErà_ÀÇx  ğ^3?àó  L  "~0Hr	 `"xÀÅ Qr  ÿ  (KK   ÈExII   À5xLL €J€ K I€Hx LĞprÀ ÄĞ vp t q 	à ä  	à ÄĞ pM€Ğ  Ğ)vJàÀ ğ 
È` %IMğäĞBJ À4•Ø ‚ n p1d‚ € 5 '!‚„@¼` I o0Aˆs mâÌ00A 3@   3<  Ğ—Im8 ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  IDAThíšÉÅÇ?Uİ¯ß:«/306Ã>@4m’K|ˆ„” œˆrÉ!U
ÿ@¤²]8D$9…  ‘"å)„°‰Mm0ØŒ—yöìó–~½Ô/‡×ıºß›7›gq˜ß¨¦~]¯–ß·~¿úÕ¯ª¶i›¶i›¶i›>1¤®gç"¢Y<<¨PcÀ° ÃÀ0 Àe…º\ä¬ı÷^z*¥äzÉt] ÏËüaƒyÔ`¾¬P»…îò+‚ "1"~
ø› RCÿÜjÙ¶ğŒÌ~&Èç“î%5Œ¤Ê–îB¯ÛØ?îS}G¶JÆ-</óc!á³‚<¼™~Ú§#á5ê¯ÖúUÿÙMŠºyÀÓ2}X¡^d ÖVlÂ,IóáU.šY*¸TKU\ Š*GQç(©#zQ½“•oi<m
5'Èc›5óM–é§€_
b5;k‚­Jƒ3áeŞ/2eæX2uªÒ  ÀÇàK@Fil,llŠ8ôè{¬î°F¸ÅÚCQeÛ&P¡Bà{Cjè7ÿwÀÓ2ı¼ ßM—Õ¤ÁÙ°Ì»Á$ef¥‚+\ËlX+Èª,;t‰}Ö.îµ÷1fí¢ ²B«_©¡§¯Eîk<-ÓO	òë´	O™9ŞöÏpÂ?OÙ,àJcíº-Úˆò:ËNÕÏ¸}Î­ìÑ¤ÇÓèï\‹¦7xZ¦ÿÄÀ`˜®pÄş9Lµ+®x°´ÏîVÒÙªO¹;3Ê¡Ìì³w¡Qñ_|i£kzC€çe~ÌÇ?&È @ˆá}ÿ"o4NğAp‰ZäŒVê:Qh²-­Déíª ²ÜásÎ8·gF°Ğñs™ıñŞöz+xxÏñódp…7'8åŸÇ“` î@ÒÿW¨â_«ârÒ;‡ˆà¨7Û»#Ï-‘L¬ƒ^»J“¢ âáXÈËá,o6NrÚ¿€'>""QDÏˆD¢§Óz)iÓŸÓşŞlœb*œ~d[­pX Í?Şø€“Ş9jÆm½Ş©f\Nz“¼İø µ|„ğÙ-<-Ó‡y ~>ëOqÒ;ÇBXYE‹©Ô¦ıf.e,³–ÕÂ
'¼IÎúS­%a0”¥|xË ‡„AÓ„*âòNãSÁì2aVJ1R*çÍz&Uß¬¨ér0Ç;³TÄM/G·°ˆ(y,Í½‹œÊ¸Æ[E±í&àM*7¨ˆW"ŸäÒQ–L4ŒÇ¤?ÅïRÆŠ<."kî:k.S>ˆ¢šÛĞiïcfü…H&¥‰Îç´‰ÒÁ¯dâ´òx%$ys’â|6Xà´÷1ÓTÑW¦|pÓ€A?(‘?¬—©`×4ºh”.)*G:xgİÆw®ãd;£kL³TK,ğà¦ûaã1?é]f1¬6;_Í£Ò¡A“2i“˜4Hßú½Ã‰µùA„Å°Ê¤w™ø<å‡şº‚Ø`AîˆùKÁ5Sïjm)¨HrÕŠ®¤­÷$—Ö½‡‚ßV·cka‹Á‚‰R"ëJ´f¤¥”î‰CÅTñÂ 1*R&´ Ú[G•"_"*i˜†»^Š›+¾TÂZ«­tÏZí×li;¬„.M	ĞNà-|Ò–g°±±¨Ó<ItîB€·¼Sİ;è2ñ$‹€o*¦Şª§µÎ.kĞAk;