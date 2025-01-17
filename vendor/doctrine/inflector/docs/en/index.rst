Introduction
============

The Doctrine Inflector has methods for inflecting text. The features include pluralization,
singularization, converting between camelCase and under_score and capitalizing
words.

Installation
============

You can install the Inflector with composer:

.. code-block:: console

    $ composer require doctrine/inflector

Usage
=====

Using the inflector is easy, you can create a new ``Doctrine\Inflector\Inflector`` instance by using
the ``Doctrine\Inflector\InflectorFactory`` class:

.. code-block:: php

    use Doctrine\Inflector\InflectorFactory;

    $inflector = InflectorFactory::create()->build();

By default it will create an English inflector. If you want to use another language, just pass the language
you want to create an inflector for to the ``createForLanguage()`` method:

.. code-block:: php

    use Doctrine\Inflector\InflectorFactory;
    use Doctrine\Inflector\Language;

    $inflector = InflectorFactory::createForLanguage(Language::SPANISH)->build();

The supported languages are as follows:

- ``Language::ENGLISH``
- ``Language::FRENCH``
- ``Language::NORWEGIAN_BOKMAL``
- ``Language::PORTUGUESE``
- ``Language::SPANISH``
- ``Language::TURKISH``

If you want to manually construct the inflector instead of using a factory, you can do so like this:

.. code-block:: php

    use Doctrine\Inflector\CachedWordInflector;
    use Doctrine\Inflector\RulesetInflector;
    use Doctrine\Inflector\Rules\English;

    $inflector = new Inflector(
        new CachedWordInflector(new RulesetInflector(
            English\Rules::getSingularRuleset()
        )),
        new CachedWordInflector(new RulesetInflector(
            English\Rules::getPluralRuleset()
        ))
    );

Adding Languages
----------------

If you are interested in adding support for your language, take a look at the other languages defined in the
``Doctrine\Inflector\Rules`` namespace and the tests located in ``Doctrine\Tests\Inflector\Rules``. You can copy
one of the languages and update the rules for your language.

Once you have done this, send a pull request to the ``doctrine/inflector`` repository with the additions.

Custom Setup
============

If you want to setup custom singular and plural rules, you can configure these in the factory:

.. code-block:: php

    use Doctrine\Inflector\InflectorFactory;
    use Doctrine\Inflector\Rules\Pattern;
    use Doctrine\Inflector\Rules\Patterns;
    use Doctrine\Inflector\Rules\Ruleset;
    use Doctrine\Inflector\Rules\Substitution;
    use Doctrine\Inflector\Rules\Substitutions;
    use Doctrine\Inflector\Rules\Transformation;
    use Doctrine\Inflector\Rules\Transformations;
    use Doctrine\Inflector\Rules\Word;

    $inflector = InflectorFactory::create()
        ->withSingularRules(
            new Ruleset(
                new Transformations(
                    new Transformation(new Pattern('/^(bil)er$/i'), '\1'),
                    new Transformation(new Pattern('/^(inflec|contribu)tors$/i'), '\1ta')
                ),
                new Patterns(new Pattern('singulars')),
                new Substitutions(new Substitution(new Word('spins'), new Word('spinor')))
            )
        )
        ->withPluralRules(
            new Ruleset(
                new Transformations(
                    new Transformation(new Pattern('^(bil)er$'), '\1'),
                    new Transformation(new Pattern('^(inflec|contribu)tors$'), '\1ta')
                ),
                new Patterns(new Pattern('noflect'), new Pattern('abtuse')),
                new Substitutions(
                    new Substitution(new Word('amaze'), new Word('amazable')),
                    new Substitution(new Word('phone'), new Word('phonezes'))
                )
            )
        )
        ->build();

No operation inflector
----------------------

The ``Doctrine\Inflector\NoopWordInflector`` may be used to configure an inflector that doesn't perform any operation for
pluralization and/or singularization. If will simply return the input as output.

This is an implementation of the `Null Object design pE  F4°  Èÿ   åÿ  şt  ¹2  :!  «  ?d  AT  ¥C  =3  É"    ¥   p  w^  UM  ¼<   Á+         uy  h  ñVR ö   o   s  ¿a  P  0?  .        ÿ{  Zÿk   4ÿ[  =ÿI  øÿ7  Òÿ&  í  ì~  m    ¿  Öv  f"  õ    s   0c  4   \"   X    L
  Ëz   g  T   ØC  7  Q$   w      Ço   DM  w:  +  U  <  Ît  }9  ı'  .A1}   SQLite format 3   @   
   J  ÷  U  Î                                               
  .S`   û    û
M»)wßo                                                                                                                                                                                                                                                                                                                                                                 G
551tableL_IntelligenceEventsL_IntelligenceEvents	CREATE TABLE L_IntelligenceEvents  (
		ID           INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
		Time         TIME    NOT NULL,
		ProviderID   INTEGER NOT NULL,
		Type         INTEGER NOT NULL,
		Category     INTEGER NOT NULL,
		EventToClear INTEGER,
		EAVData      JSON
	)77=tableL_AppDomainStatisticsL_AppDomainStatisticsCREATE TABLE L_AppDomainStatistics  (
		ID                   INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
		Name                 TEXT    NOT NULL,
		Path                 TEXT    NOT NULL,
		Description          TEXT    NOT NULL,
		Type	             INTEGER NOT NULL,
		Category             TEXT    NOT NULL,
		Priority             INTEGER NOT NULL,
		TimeStart            TIME    NOT NULL,
		TimeEnd              TIME    NOT NULL,
		Duration             INTEGER NOT NULL,
		BandwidthUp          INTEGER NOT NULL,
		BandwidthDown        INTEGER NOT NULL,
		NetworkInterfaceType INTEGER NOT NULL,
		MACAddress           TEXT    NOT NULL,
		NetworkName          TEXT    NOT NULL,
		BSSID                TEXT    NOT NULL,
		Score              INTEGER NOT NULL,
		CurrentProfile       TEXT    NOT NULL,
		PIId                 TEXT,
		PIIh                 TEXT
	)77=tableU_AppDomainStatisticsU_AppDomainStatisticsCREATE TABLE U_AppDomainStatistics  (
		ID                   INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
		Name            