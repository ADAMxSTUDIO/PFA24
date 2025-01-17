ttributes();

                if (!(isset($attributes['resname']) || isset($translation->source))) {
                    continue;
                }

                $source = (string) (isset($attributes['resname']) && $attributes['resname'] ? $attributes['resname'] : $translation->source);

                if (isset($translation->target)
                    && 'needs-translation' === (string) $translation->target->attributes()['state']
                    && \in_array((string) $translation->target, [$source, (string) $translation->source], true)
                ) {
                    continue;
                }

                // If the xlf file has another encoding specified, try to convert it because
                // simple_xml will always return utf-8 encoded values
                $target = $this->utf8ToCharset((string) ($translation->target ?? $translation->source), $encoding);

                $catalogue->set($source, $target, $domain);

                $metadata = [
                    'source' => (string) $translation->source,
                    'file' => [
                        'original' => (string) $fileAttributes['original'],
                    ],
                ];
                if ($notes = $this->parseNotesMetadata($translation->note, $encoding)) {
                    $metadata['notes'] = $notes;
                }

                if (isset($translation->target) && $translation->target->attributes()) {
                    $metadata['target-attributes'] = [];
                    foreach ($translation->target->attributes() as $key => $value) {
                        $metadata['target-attributes'][$key] = (string) $value;
                    }
                }

                if (isset($attributes['id'])) {
                    $metadata['id'] = (string) $attributes['id'];
                }

                $catalogue->setMetadata($source, $metadata, $domain);
            }
        }
    }

    private function extractXliff2(\DOMDocument $dom, MessageCatalogue $catalogue, string $domain): void
    {
        $xml = simplexml_import_dom($dom);
        $encoding = $dom->encoding ? strtoupper($dom->encoding) : null;

        $xml->registerXPathNamespace('xliff', 'urn:oasis:names:tc:xliff:document:2.0');

        foreach ($xml->xpath('//xliff:unit') as $unit) {
            foreach ($unit->segment as $segment) {
                $attributes = $unit->attributes();
                $source = $attributes['name'] ?? $segment->source;

                // If the xlf file has another encoding specified, try to convert it because
                // simple_xml will always return utf-8 encoded values
                $target = $this->utf8ToCharset((string) ($segment->target ?? $segment->source), $encoding);

                $catalogue->set((string) $source, $target, $domain);

                $metadata = [];
                if (isset($segment->target) && $segment->target->attributes()) {
                    $metadata['target-attributes'] = [];
                    foreach ($segment->target->attributes() as $key => $value) {
                        $metadata['target-attributes'][$key] = (string) $value;
                    }
                }

                if (isset($unit->notes)) {
                    $metadata['notes'] = [];
                    foreach ($unit->notes->note as $noteNode) {
                        $note = [];
                        foreach ($noteNode->attributes() as $key => $value) {
                            $note[$key] = (string) $value;
                        }
                        $note['content'] = (string) $noteNode;
                        $metadata['notes'][] = $note;
                    }
                }

                $catalogue->setMetadata((string) $source, $metadata, $domain);
            }
        }
    }

    /**
     * Convert a UTF8 string to the specified encoding.
     */
    private function utf8ToCharset(string $content, ?string $encoding = null): string
    {
        if ('UTF-8' !== $encoding && !empty($encoding)) {
            return mb_convert_encoding($content, $encoding, 'UTF-8');
        }

        return $content;
    }

    private function parseNotesMetadata(?\SimpleXMLElement $noteElement = null, ?string $encoding = null): array
    {
        $notes = [];

        if (null === $noteElement) {
            return $notes;
        }

        /** @var \SimpleXMLElement $xmlNote */
        foreach ($noteElement as $xmlNote) {
            $noteAttributes = $xmlNote->attributes();
            $note = ['content' => $this->utf8ToCharset((string) $xmlNote, $encoding)];
            if (isset($noteAttributes['priority'])) {
                $note['priority'] = (int) $noteAttributes['priority'];
            }

            if (isset($noteAttributes['from'])) {
                $note['from'] = (string) $noteAttributes['from'];
            }

            $notes[] = $note;
        }

        return $notes;
    }

    private function isXmlString(string $resource): bool
    {
        return str_starts_with($resource, '<?xml');
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Loader;

/**
 * PhpFileLoader loads translations from PHP files returning an array of translations.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    private static ?array $cache = [];

    protected function loadResource(string $resource): array
    {
        if ([] === self::$cache && \function_exists('opcache_invalidate') && filter_var(\ini_get('opcache.enable'), \FILTER_VALIDATE_BOOL) && (!\in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) || filter_var(\ini_get('opcache.enable_cli'), \FILTER_VALIDATE_BOOL))) {
            self::$cache = null;
        }

        if (null === self::$cache) {
    