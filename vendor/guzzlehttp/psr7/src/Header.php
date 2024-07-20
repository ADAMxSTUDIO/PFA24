<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Translation\Catalogue\TargetOperation;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Provider\TranslationProviderCollection;
use Symfony\Component\Translation\Reader\TranslationReaderInterface;
use Symfony\Component\Translation\Writer\TranslationWriterInterface;

/**
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
#[AsCommand(name: 'translation:pull', description: 'Pull translations from a given provider.')]
final class TranslationPullCommand extends Command
{
    use TranslationTrait;

    private TranslationProviderCollection $providerCollection;
    private TranslationWriterInterface $writer;
    private TranslationReaderInterface $reader;
    private string $defaultLocale;
    private array $transPaths;
    private array $enabledLocales;

    public function __construct(TranslationProviderCollection $providerCollection, TranslationWriterInterface $writer, TranslationReaderInterface $reader, string $defaultLocale, array $transPaths = [], array $enabledLocales = [])
    {
        $this->providerCollection = $providerCollection;
        $this->writer = $writer;
        $this->reader = $reader;
        $this->defaultLocale = $defaultLocale;
        $this->transPaths = $transPaths;
        $this->enabledLocales = $enabledLocales;

        parent::__construct();
    }

    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        if ($input->mustSuggestArgumentValuesFor('provider')) {
            $suggestions->suggestValues($this->providerCollection->keys());

            return;
        }

        if ($input->mustSuggestOptionValuesFor('domains')) {
            $provider = $this->providerCollection->get($input->getArgument('provider'));

            if (method_exists($provider, 'getDomains')) {
                $suggestions->suggestValues($provider->getDomains());
            }

            return;
        }

        if ($input->mustSuggestOptionValuesFor('locales')) {
            $suggestions->suggestValues($this->enabledLocales);

            return;
        }

        if ($input->mustSuggestOptionValuesFor('format')) {
            $suggestions->suggestValues(['php', 'xlf', 'xlf12', 'xlf20', 'po', 'mo', 'yml', 'yaml', 'ts', 'csv', 'json', 'ini', 'res']);
        }
    }

    protected function configure(): void
    {
        $keys = $this->providerCollection->keys();
        $defaultProvider = 1 === \count($keys) ? $keys[0] : null;

        $this
            ->setDefinition([
                new InputArgument('provider', null !== $defaultProvider ? InputArgument::OPTIONAL : InputArgument::REQUIRED, 'The provider to pull translations from.', $defaultProvider),
                new InputOption('force', null, InputOption::VALUE_NONE, 'Override existing translations with provider ones (it will delete not synchronized messages).'),
                new InputOption('intl-icu', null, InputOption::VALUE_NONE, 'Associated to --force option, it will write messages in "%domain%+intl-icu.%locale%.xlf" files.'),
                new InputOption('domains', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_