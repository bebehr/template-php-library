<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->in(__DIR__)
    ->exclude(['.vscode', 'var', 'vendor', 'vendor-bin'])
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true);

$rules = [
    '@PHP80Migration:risky' => true,
    '@PHP81Migration' => true,
    '@PHPUnit100Migration:risky' => true,
    '@PER-CS' => true,
    '@PER-CS:risky' => true,
    'general_phpdoc_annotation_remove' => [
        'annotations' => ['expectedDeprecation'],
    ],
    'modernize_strpos' => true,
];

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/var/cache/.php-cs-fixer.cache');
