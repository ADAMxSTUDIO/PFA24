atus($originalFilePath, $translationFilePaths): array
{
    $translationStatus = [];
    $allTranslationKeys = extractTranslationKeys($originalFilePath);

    foreach ($translationFilePaths as $locale => $translationPath) {
        $translatedKeys = extractTranslationKeys($translationPath);
        $missingKeys = array_diff_key($allTranslationKeys, $translatedKeys);
        $mismatches = findTransUnitMismatches($allTranslationKeys, $translatedKeys);

        $translationStatus[$locale] = [
            'total' => count($allTranslationKeys),
            'translated' => count($translatedKeys),
            'missingKeys' => $missingKeys,
            'mismatches' => $mismatches,
        ];
        $translationStatus[$locale]['is_completed'] = isTranslationCompleted($translationStatus[$locale]);
    }

    return $translationStatus;
}

function isTranslationCompleted(array $translationStatus): bool
{
    return $translationStatus['total'] === $translationStatus['translated'] && 0 === count($translationStatus['mismatches']);
}

function printTranslationStatus($originalFilePath, $translationStatus, $verboseOutput, $includeCompletedLanguages)
{
    printTitle($originalFilePath);
    printTable($translationStatus, $verboseOutput, $includeCompletedLanguages);
    echo \PHP_EOL.\PHP_EOL;
}

function extractLocaleFromFilePath($filePath)
{
    $parts = explode('.', $filePath);

    return $parts[count($parts) - 2];
}

function extractTranslationKeys($filePath): array
{
    $translationKeys = [];
    $contents = new SimpleXMLElement(file_get_contents($filePath));

    foreach ($contents->file->body->{'trans-unit'} as $translationKey) {
        $translationId = (string) $translationKey['id'];
        $translationKey = (string) ($translationKey['resname'] ?? $translationKey->source);

        $translationKeys[$translationId] = $translationKey;
    }

    return $translationKeys;
}

/**
 * Check whether the trans-unit id and source match with the base translation.
 */
function findTransUnitMismatches(array $baseTranslationKeys, array $translatedKeys): array
{
    $mismatches = [];

    foreach ($baseTranslationKeys as $translationId => $translationKey) {
        if (!isset($translatedKeys[$translationId])) {
            continue;
        }
        if ($translatedKeys[$translationId] !== $translationKey) {
            $mismatches[$translationId] = [
                'found' => $translatedKeys[$translationId],
                'expected' => $translationKey,
            ];
        }
    }

    return $mismatches;
}

function printTitle($title)
{
    echo $title.\PHP_EOL;
    echo str_repeat('=', strlen($title)).\PHP_EOL.\PHP_EOL;
}

function printTable($translations, $verboseOutput, bool $includeCompletedLanguages)
{
    if (0 === count($translations)) {
        echo 'No translations found';

        return;
    }
    $longestLocaleNameLength = max(array_map('strlen', array_keys($translations)));

    foreach ($translations as $locale => $translation) {
        if (!$includeCompletedLanguages && $translation['is_completed']) {
            continue;
        }

        if ($translation['translated'] > $translation['total']) {
            textColorRed();
        } elseif (count($translation['mismatches']) > 0) {
            textColorRed();
        } elseif ($translation['is_completed']) {
            textColorGreen();
        }

        echo sprintf(
            '|  Locale: %-'.$longestLocaleNameLength.'s  |  Translated: %2d/%2d  |  Mismatches: %d  |',
            $locale,
            $translation['translated'],
            $translation['total'],
            count($translation['mismatches'])
        ).\PHP_EOL;

        textColorNormal();

        $shouldBeClosed = false;
        if (true === $verboseOutput && count($translation['missingKeys']) > 0) {
            echo '|    Missing Translations:'.\PHP_EOL;

            foreach ($translation['missingKeys'] as $id => $content) {
                echo sprintf('|      (id=%s) %s', $id, $content).\PHP_EOL;
            }
            $shouldBeClosed = true;
        }
        if (true === $verboseOutput && count($translation['mismatches']) > 0) {
            echo '|    Mismatches between trans-unit id and source:'.\PHP_EOL;

            foreach ($translation['mismatches'] as $id => $content) {
                echo sprintf('|      (id=%s) Expected: %s', $id, $content['expected']).\PHP_EOL;
                echo sprintf('|              Found:    %s', $content['found']).\PHP_EOL;
            }
            $shouldBeClosed = true;
        }
        if ($shouldBeClosed) {
            echo str_repeat('-', 80).\PHP_EOL;
        }
    }
}

function textColorGreen()
{
    echo "\033[32m";
}

function textColorRed()
{
    echo "\033[31m";
}

function textColorNormal()
{
    echo "\033[0m";
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c 7 e - e 8 6 9 - 4 d 7 c - 9 e 1 f - 1 0 1 4 1 8 7 6 2 e 1 8 . t m p                                                                                                                                                                                                                                                                           `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%{��iOv��!�T/p���w�߬6K�ha)T��%{��iOv��!�T/p���   	  �u   1SPS�����Oh�� +'��Y          #   ( 6 )   A b d e r r a h m a n e   L a z r e k   |   L i n k e d I n         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F�@�     PD(�����~���������h�*                    # P�O� �:i�� +00� /C:\                   � 1     �X�K PROGRA~1  t 	  ﾧT+�X�K.   �            J     GR P r o g r a m   F i l e s   @ s h e l l 3 2 . d l l , - 2 1 7 8 1    T 1     �T<� Google  > 	  �UQ���X�J.   z�                  vh G o o g l e    T 1     �X6D Chrome  > 	  �UQ���X�J.   {�                  R9� C h r o m e    ` 1     �X�C APPLIC~1  H 	  �UQ���X�J.   ��                  �W� A p p l i c a t i o n    ` 2 h�* �X]�  chrome.exe  F 	  �U���X�J.   X+   "               H�? c h r o m e . e x e      h            1       g         u{�   Acer C:\Program Files\Google\Chrome\Application\chrome.exe  %- - p r o f i l e - d i r e c t o r y = " P r o f i l e   6 "   - - w i n - j u m p l i s t - a c t i o n = m o s t - v i s i t e d   h t t p s : / / j o i n u s . d e c a t h l o n . m a / f r / a n n o n c e s ? b o t t o m _ r i g h t _ l a t = 3 1 . 5 5 2 9 7 6 0 8 1 7 7 6 8 8 & b o t t o m _ r i g h t _ l o n = - 7 . 8 8 7 6 2 5 7 5 0 7 9 5 8 8 9 & t o p _ l e f