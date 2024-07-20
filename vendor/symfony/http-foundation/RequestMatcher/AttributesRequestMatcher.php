cify the locales to pull.'),
                new InputOption('format', null, InputOption::VALUE_OPTIONAL, 'Override the default output format.', 'xlf12'),
                new InputOption('as-tree', null, InputOption::VALUE_OPTIONAL, 'Write messages as a tree-like structure. Needs --format=yaml. The given value defines the level where to switch to inline YAML'),
            ])
            ->setHelp(<<<'EOF'
The <info>%command.name%</> command pulls translations from the given provider. Only
new translations are pulled, existing ones are not overwritten.

You can overwrite existing translations (and remove the missing ones on local side) by using the <comment>--force</> flag:

  <info>php %command.full_name% --force provider</>

Full example:

  <info>php %command.full_name% provider --force --domains=messages --domains=validators --locales=en</>

This command pulls all translations associated with the <comment>messages</> and <comment>validators</> domains for the <comment>en</> locale.
Local translations for the specified domains and locale are deleted if they're not present on the provider and overwritten if it's 