<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Yaml;

use Symfony\Component\Yaml\Exception\DumpException;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Tag\TaggedValue;

/**
 * Inline implements a YAML parser/dumper for the YAML inline syntax.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class Inline
{
    public const REGEX_QUOTED_STRING = '(?:"([^"\\\\]*+(?:\\\\.[^"\\\\]*+)*+)"|\'([^\']*+(?:\'\'[^\']*+)*+)\')';

    public static int $parsedLineNumber = -1;
    public static ?string $parsedFilename = null;

    private static bool $exceptionOnInvalidType = false;
    private static bool $objectSupport = false;
    private static bool $objectForMap = false;
    private static bool $constantSupport = false;

    public static function initialize(int $flags, ?int $parsedLineNumber = null, ?string $parsedFilename = null): void
    {
        self::$exceptionOnInvalidType = (bool) (Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE & $flags);
        self::$objectSupport = (bool) (Yaml::PARSE_OBJECT & $flags);
        self::$objectForMap = (bool) (Yaml::PARSE_OBJECT_FOR_MAP & $flags);
        self::$constantSupport = (bool) (Yaml::PARSE_CONSTANT & $flags);
        self::$parsedFilename = $parsedFilename;

        if (null !== $parsedLineNumber) {
            self::$parsedLineNumber = $parsedLineNumber;
        }
    }

    /**
     * Converts a YAML string to a PHP value.
     *
     * @param int   $flags      A bit field of Yaml::PARSE_* constants to customize the YAML parser behavior
     * @param array $references Mapping of variable names to values
     *
     * @throws ParseException
     */
    public static function parse(string $value, int $flags = 0, array &$references = []): mixed
    {
        self::initialize($flags);

        $value = trim($value);

        if ('' === $value) {
            return '';
        }

        $i = 0;
        $tag = self::parseTag($value, $i, $flags);
        switch ($value[$i]) {
            case '[':
                $result = self::parseSequence($value, $flags, $i, $references);
                ++$i;
                break;
            case '{':
                $result = self::parseMapping($value, $flags, $i, $references);
                ++$i;
                break;
            default:
                $result = self::parseScalar($value, $flags, null, $i, true, $references);
        }

        // some comments are allowed at the end
        if (preg_replace('/\s*#.*$/A', '', substr($value, $i))) {
            throw new ParseException(sprintf('Unexpected characters near "%s".', substr($value, $i)), self::$parsedLineNumber + 1, $value, self::$parsedFilename);
        }

        if (null !== $tag && '' !== $tag) {
            return new TaggedValue($tag, $result);
        }

        return $result;
    }

    /**
     * Dumps a given PHP variable to a YAML string.
     *
     * @param mixed $value The PHP variable to convert
     * @param int   $flags A bit field of Yaml::DUMP_* constants to customize the dumped YAML string
     *
     * @throws DumpException When trying to dump PHP resource
     */
    public static function dump(mixed $value, int $flags = 0): string
    {
        switch (true) {
            case \is_resource($value):
                if (Yaml::DUMP_EXCEPTION_ON_INVALID_TYPE & $flags) {
                    throw new DumpException(sprintf('Unable to dump PHP resources in a YAML file ("%s").', get_resource_type($value)));
                }

                return self::dumpNull($flags);
            case $value instanceof \DateTimeInterface:
                return $value->format(match (true) {
                    !$length = \strlen(rtrim($value->format('u'), '0')) => 'c',
                    $length < 4 => 'Y-m-d\TH:i:s.vP',
                    default => 'Y-m-d\TH:i:s.uP',
                });
            case ${"code":0,"msg":"success.","data":{"product_id":3492,"product_name":"Dr.Fone - Riparazione Sistema (iOS)(Italiano)","license_id":305,"sku_id":"100034920305","license_name_language":{"en_us":"1 Year License (1-5 Devices)","zh_cn":"1 Year License (1-5 Devices)","pt_br":"Licen\u00e7a de 1 ano (1-5 dispositivos)","ja_jp":"\u5e74\u9593\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"1 Year License (1-5 Devices)","he_he":"1 Year License (1-5 Devices)","ar_dz":"1 Year License (1-5 Devices)","es_es":"Licencia de 1 a\u00f1o (1-5 dispositivos)","pl_pl":"1 Year License (1-5 Devices)","de_de":"1-Jahres-Lizenz (1-5 Ger\u00e4te)","fr_fr":"Licence d'un an (1-5 appareils)","it_it":"Licenza di 1 anno (1-5 Dispositivi)","es_mx":"1 Year License (1-5 Devices)","zh_hk":"1 Year License (1-5 Devices)","zh_tw":"1 Year License (1-5 Devices)","nl_nl":"1 Year License (1-5 Devices)","ru_ru":"\u0413\u043e\u0434\u043e\u0432\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"1 Year License (1-5 Devices)","sv_sv":"1 Year License (1-5 Devices)","th_th":"1 Year License (1-5 Devices)","no_no":"1 Year License (1-5 Devices)","da_da":"1 Year License (1-5 Devices)","ms_my":"1 Year License (1-5 Devices)","ro_ro":"1 Year License (1-5 Devices)","id_id":"1 Year License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0644\u0645\u062f\u0629 \u0633\u0646\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"1 Year License (1-5 Devices)","mr_in":"1 Year License (1-5 Devices)","bn_in":"1 Year License (1-5 Devices)","te_in":"1 Year License (1-5 Devices)","ta_in":"1 Year License (1-5 Devices)","pj_in":"1 Year License (1-5 Devices)","kn_in":"1 Year License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":59.99,"init_price":0,"final_price":47.99,"total_discount":12,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=German&verify=435b0677b961fda09298c72fe6930826","fr_fr":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=French&verify=435b0677b961fda09298c72fe6930826","es_es":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=Spanish&verify=435b0677b961fda09298c72fe6930826","pt_br":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=Portuguese&verify=435b0677b961fda09298c72fe6930826","it_it":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=Italian&verify=435b0677b961fda09298c72fe6930826","nl_nl":"https:\/\/store.wondershare.it\/index.php?submod=checkout&method=index&pid=3492&license_id=305&sub_lid=0&coupon_id=12465&currency=EUR&language=Dutch&verify=435b0677b961fda09298c72fe6930826"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              {"code":0,"msg":"success.","data":{"product_id":3518,"product_name":"Dr.Fone - Repara\u00e7\u00e3o do Sistema (iOS)","license_id":136,"sku_id":"100035180136","license_name_language":{"en_us":"Individual Perpetual License (1-5 Devices)","zh_cn":"Perpetual License (1-5 Devices)","pt_br":"Licen\u00e7a Perp\u00e9tua (1-5 Dispositivos)","ja_jp":"\u6c38\u4e45\u30e9\u30a4\u30bb\u30f3\u30b9 (1-5 \u7aef\u672b)","ko_kr":"Perpetual License (1-5 Devices)","he_he":"Perpetual License (1-5 Devices)","ar_dz":"\u062a\u0631\u062e\u064a\u0635 \u062f\u0627\u0626\u0645","es_es":"Licencia perpetua (1-5 dispositivos) ","pl_pl":"Perpetual License (1-5 Devices)","de_de":"Dauerlizenz (1-5 Ger\u00e4te)","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Licenza perpetua (1-5 Dispositivi)","es_mx":"Perpetual License (1-5 Devices)","zh_hk":"Perpetual License (1-5 Devices)","zh_tw":"Perpetual License (1-5 Devices)","nl_nl":"Perpetual License (1-5 Devices)","ru_ru":"\u0411\u0435\u0441\u0441\u0440\u043e\u0447\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f (1-5 \u0423\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432)","fi_fi":"Perpetual License (1-5 Devices)","sv_sv":"Perpetual License (1-5 Devices)","th_th":"Perpetual License (1-5 Devices)","no_no":"Perpetual License (1-5 Devices)","da_da":"Perpetual License (1-5 Devices)","ms_my":"Perpetual License (1-5 Devices)","ro_ro":"Perpetual License (1-5 Devices)","id_id":"Perpetual License (1-5 Devices)","ar_ae":"\u062a\u0631\u062e\u064a\u0635 \u0645\u062f\u0649 \u0627\u0644\u062d\u064a\u0627\u0629 (1-5 \u0623\u062c\u0647\u0632\u0629)","hi_in":"Perpetual License (1-5 Devices)","mr_in":"Perpetual License (1-5 Devices)","bn_in":"Perpetual License (1-5 Devices)","te_in":"Perpetual License (1-5 Devices)","ta_in":"Perpetual License (1-5 Devices)","pj_in":"Perpetual License (1-5 Devices)","kn_in":"Perpetual License (1-5 Devices)"},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":69.95,"init_price":0,"final_price":69.95,"total_discount":0,"avangate_url":"","cart_url_language":{"en_us":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=USD&language=English&verify=eaaf181364710b64a15f153442774beb","es_es":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=USD&language=Spanish&verify=eaaf181364710b64a15f153442774beb","ru_ru":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=USD&language=Russian&verify=eaaf181364710b64a15f153442774beb"},"price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":69.99,"init_price":0,"final_price":69.99,"total_discount":0,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=German&verify=fe25cc7f3b146e4e43ff70ee9356ecee","fr_fr":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=French&verify=fe25cc7f3b146e4e43ff70ee9356ecee","es_es":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=Spanish&verify=fe25cc7f3b146e4e43ff70ee9356ecee","pt_br":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=Portuguese&verify=fe25cc7f3b146e4e43ff70ee9356ecee","it_it":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=Italian&verify=fe25cc7f3b146e4e43ff70ee9356ecee","nl_nl":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=EUR&language=Dutch&verify=fe25cc7f3b146e4e43ff70ee9356ecee"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":223.99,"init_price":0,"final_price":223.99,"total_discount":0,"avangate_url":"","cart_url_language":{"pt_br":"https:\/\/store.wondershare.com.br\/index.php?submod=checkout&method=index&pid=3518&license_id=136&sub_lid=0&currency=BRL&language=Portuguese&verify=28b9a01281be9f6b2ecd66b612dd4395"},"price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              eNumber + 1, $mapping);
                        }
                        break;
                    default:
                        $value = self::parseScalar($mapping, $flags, [',', '}', "\n"], $i, null === $tag, $references, $isValueQuoted);
                        // Spec: Keys MUST be unique; first one wins.
                        // Parser cannot abort this mapping earlier, since lines
                        // are processed sequentially.
                        // But overwriting is allowed when a merge node is used in current block.
                        if ('<<' === $key) {
                            $output += $value;
                        } elseif ($allowOverwrite || !isset($output[$key])) {
                            if (!$isValueQuoted && \is_string($value) && '' !== $value && '&' === $value[0] && !self::isBinaryString($value) && Parser::preg_match(Parser::REFERENCE_PATTERN, $value, $matches)) {
                                $references[$matches['ref']] = $matches['value'];
                                $value = $matches['value'];
                            }

                            if (null !== $tag) {
                                $output[$key] = new TaggedValue($tag, $value);
                            } else {
                                $output[$key] = $value;
                            }
                        } elseif (isset($output[$key])) {
                            throw new ParseException(sprintf('Duplicate key "%s" detected.', $key), self::$parsedLineNumber + 1, $mapping);
                        }
                        --$i;
                }
                ++$i;

                continue 2;
            }
        }

        throw new ParseException(sprintf('Malformed inline YAML string: "%s".', $mapping), self::$parsedLineNumber + 1, null, self::$parsedFilename);
    }

    /**
     * Evaluates scalars and replaces magic values.
     *
     * @throws ParseException when object parsing support was disabled and the parser detected a PHP object or when a reference could not be resolved
     */
    private static function evaluateScalar(string $scalar, int $flags, array &$references = [], ?bool &$isQuotedString = null): mixed
    {
        $isQuotedString = false;
        $scalar = trim($scalar);

        if (str_starts_with($scalar, '*')) {
            if (false !== $pos = strpos($scalar, '#')) {
                $value = substr($scalar, 1, $pos - 2);
            } else {
                $value = substr($scalar, 1);
            }

            // an unquoted *
            if (false === $value || '' === $value) {
                throw new ParseException('A reference must contain at least one character.', self::$parsedLineNumber + 1, $value, self::$parsedFilename);
            }

            if (!\array_key_exists($value, $references)) {
                throw new ParseException(sprintf('Reference "%s" does not exist.', $value), self::$parsedLineNumber + 1, $value, self::$parsedFilename);
            }

            return $references[$value];
        }

        $scalarLower = strtolower($scalar);

        switch (true) {
            case 'null' === $scalarLower:
            case '' === $scalar:
            case '~' === $scalar:
                return null;
            case 'true' === $scalarLower:
                return true;
            case 'false' === $scalarLower:
                return false;
            case '!' === $scalar[0]:
                switch (true) {
                    case str_starts_with($scalar, '!!str '):
                        $s = (string) substr($scalar, 6);

                        if (\in_array($s[0] ?? '', ['"', "'"], true)) {
                            $isQuotedString = true;
                            $s = self::parseQuotedScalar($s);
                        }

                        return $s;
                    case str_starts_with($scalar, '! '):
                        return substr($scalar, 2);
                    case str_starts_with($scalar, '!php/object'):
                        if (self::$objectSupport) {
                            if (!isset($scalar[12])) {
                                throw new ParseException('Missing value for tag "!php/object".', self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }

                            return unserialize(self::parseScalar(substr($scalar, 12)));
                        }

                        if (self::$exceptionOnInvalidType) {
                            throw new ParseException('Object support when parsing a YAML file has been disabled.', self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                        }

                        return null;
                    case str_starts_with($scalar, '!php/const'):
                        if (self::$constantSupport) {
                            if (!isset($scalar[11])) {
                                throw new ParseException('Missing value for tag "!php/const".', self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }

                            $i = 0;
                            if (\defined($const = self::parseScalar(substr($scalar, 11), 0, null, $i, false))) {
                                return \constant($const);
                            }

                            throw new ParseException(sprintf('The constant "%s" is not defined.', $const), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                        }
                        if (self::$exceptionOnInvalidType) {
                            throw new ParseException(sprintf('The string "%s" could not be parsed as a constant. Did you forget to pass the "Yaml::PARSE_CONSTANT" flag to the parser?', $scalar), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                        }

                        return null;
                    case str_starts_with($scalar, '!php/enum'):
                        if (self::$constantSupport) {
                            if (!isset($scalar[11])) {
                                throw new ParseException('Missing value for tag "!php/enum".', self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }

                            $i = 0;
                            $enum = self::parseScalar(substr($scalar, 10), 0, null, $i, false);
                            if ($useValue = str_ends_with($enum, '->value')) {
                                $enum = substr($enum, 0, -7);
                            }
                            if (!\defined($enum)) {
                                throw new ParseException(sprintf('The enum "%s" is not defined.', $enum), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }

                            $value = \constant($enum);

                            if (!$value instanceof \UnitEnum) {
                                throw new ParseException(sprintf('The string "%s" is not the name of a valid enum.', $enum), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }
                            if (!$useValue) {
                                return $value;
                            }
                            if (!$value instanceof \BackedEnum) {
                                throw new ParseException(sprintf('The enum "%s" defines no value next to its name.', $enum), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                            }

                            return $value->value;
                        }
                        if (self::$exceptionOnInvalidType) {
                            throw new ParseException(sprintf('The string "%s" could not be parsed as an enum. Did you forget to pass the "Yaml::PARSE_CONSTANT" flag to the parser?', $scalar), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
                        }

                        return null;
                    case str_starts_with($scalar, '!!float '):
                        return (float) substr($scalar, 8);
                    case str_starts_with($scalar, '!!binary '):
                        return self::evaluateBinaryScalar(substr($scalar, 9));
                }

                throw new ParseException(sprintf('The string "%s" could not be parsed as it uses an unsupported built-in tag.', $scalar), self::$parsedLineNumber, $scalar, self::$parsedFilename);
            case preg_match('/^(?:\+|-)?0o(?P<value>[0-7_]++)$/', $scalar, $matches):
                $value = str_replace('_', '', $matches['value']);

                if ('-' === $scalar[0]) {
                    return -octdec($value);
                }

                return octdec($value);
            case \in_array($scalar[0], ['+', '-', '.'], true) || is_numeric($scalar[0]):
                if (Parser::preg_match('{^[+-]?[0-9][0-9_]*$}', $scalar)) {
                    $scalar = str_replace('_', '', $scalar);
                }

                switch (true) {
                    case ctype_digit($scalar):
                    case '-' === $scalar[0] && ctype_digit(substr($scalar, 1)):
                        $cast = (int) $scalar;

                        return ($scalar === (string) $cast) ? $cast : $scalar;
                    case is_numeric($scalar):
                    case Parser::preg_match(self::getHexRegex(), $scalar):
                        $scalar = str_replace('_', '', $scalar);

                        return '0x' === $scalar[0].$scalar[1] ? hexdec($scalar) : (float) $scalar;
                    case '.inf' === $scalarLower:
                    case '.nan' === $scalarLower:
                        return -log(0);
                    case '-.inf' === $scalarLower:
                        return log(0);
                    case Parser::preg_match('/^(-|\+)?[0-9][0-9_]*(\.[0-9_]+)?$/', $scalar):
                        return (float) str_replace('_', '', $scalar);
                    case Parser::preg_match(self::getTimestampRegex(), $scalar):
                        // When no timezone is provided in the parsed date, YAML spec says we must assume UTC.
                        $time = new \DateTimeImmutable($scalar, new \DateTimeZone('UTC'));

                        if (Yaml::PARSE_DATETIME & $flags) {
                            return $time;
                        }

                        if ('' !== rtrim($time->format('u'), '0')) {
                            return (float) $time->format('U.u');
                        }

                        try {
                            if (false !== $scalar = $time->getTimestamp()) {
                                return $scalar;
                            }
                        } catch (\ValueError) {
                            // no-op
                        }

                        return $time->format('U');
                }
        }

        return (string) $scalar;
    }

    private static function parseTag(string $value, int &$i, int $flags): ?string
    {
        if ('!' !== $value[$i]) {
            return null;
        }

        $tagLength = strcspn($value, " \t\n[]{},", $i + 1);
        $tag = substr($value, $i + 1, $tagLength);

        $nextOffset = $i + $tagLength + 1;
        $nextOffset += strspn($value, ' ', $nextOffset);

        if ('' === $tag && (!isset($value[$nextOffset]) || \in_array($value[$nextOffset], [']', '}', ','], true))) {
            throw new ParseException('Using the unquoted scalar value "!" is not supported. You must quote it.', self::$parsedLineNumber + 1, $value, self::$parsedFilename);
        }

        // Is followed by a scalar and is a built-in tag
        if ('' !== $tag && (!isset($value[$nextOffset]) || !\in_array($value[$nextOffset], ['[', '{'], true)) && ('!' === $tag[0] || \in_array($tag, ['str', 'php/const', 'php/enum', 'php/object'], true))) {
            // Manage in {@link self::evaluateScalar()}
            return null;
        }

        $i = $nextOffset;

        // Built-in tags
        if ('' !== $tag && '!' === $tag[0]) {
            throw new ParseException(sprintf('The built-in tag "!%s" is not implemented.', $tag), self::$parsedLineNumber + 1, $value, self::$parsedFilename);
        }

        if ('' !== $tag && !isset($value[$i])) {
            throw new ParseException(sprintf('Missing value for tag "%s".', $tag), self::$parsedLineNumber + 1, $value, self::$parsedFilename);
        }

        if ('' === $tag || Yaml::PARSE_CUSTOM_TAGS & $flags) {
            return $tag;
        }

        throw new ParseException(sprintf('Tags support is not enabled. Enable the "Yaml::PARSE_CUSTOM_TAGS" flag to use "!%s".', $tag), self::$parsedLineNumber + 1, $value, self::$parsedFilename);
    }

    public static function evaluateBinaryScalar(string $scalar): string
    {
        $parsedBinaryData = self::parseScalar(preg_replace('/\s/', '', $scalar));

        if (0 !== (\strlen($parsedBinaryData) % 4)) {
            throw new ParseException(sprintf('The normalized base64 encoded data (data without whitespace characters) length must be a multiple of four (%d bytes given).', \strlen($parsedBinaryData)), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
        }

        if (!Parser::preg_match('#^[A-Z0-9+/]+={0,2}$#i', $parsedBinaryData)) {
            throw new ParseException(sprintf('The base64 encoded data (%s) contains invalid characters.', $parsedBinaryData), self::$parsedLineNumber + 1, $scalar, self::$parsedFilename);
        }

        return base64_decode($parsedBinaryData, true);
    }

    private static function isBinaryString(string $value): bool
    {
        return !preg_match('//u', $value) || preg_match('/[^\x00\x07-\x0d\x1B\x20-\xff]/', $value);
    }

    /**
     * Gets a regex that matches a YAML date.
     *
     * @see http://www.yaml.org/spec/1.2/spec.html#id2761573
     */
    private static function getTimestampRegex(): string
    {
        return <<<EOF
        ~^
        (?P<year>[0-9][0-9][0-9][0-9])
        -(?P<month>[0-9][0-9]?)
        -(?P<day>[0-9][0-9]?)
        (?:(?:[Tt]|[ \t]+)
        (?P<hour>[0-9][0-9]?)
        :(?P<minute>[0-9][0-9])
        :(?P<second>[0-9][0-9])
        (?:\.(?P<fraction>[0-9]*))?
        (?:[ \t]*(?P<tz>Z|(?P<tz_sign>[-+])(?P<tz_hour>[0-9][0-9]?)
        (?::(?P<tz_minute>[0-9][0-9]))?))?)?
        $~x
EOF;
    }

    /**
     * Gets a regex that matches a YAML number in hexadecimal notation.
     */
    private static function getHexRegex(): string
    {
        return '~^0x[0-9a-f_]++$~i';
    }
}
