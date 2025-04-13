<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->exclude([
        '.vscode',
        'var',
        'vendor',
        'vendor-bin',
    ])
    ->in(__DIR__);

$rules = [
    '@PHP80Migration:risky' => true,
    '@PHP81Migration' => true,
    '@PHPUnit100Migration:risky' => true,
    '@PER-CS' => true,
    '@PER-CS:risky' => true,
];

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/var/cache/.php-cs-fixer.cache');
