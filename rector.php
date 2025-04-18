<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor-bin/rector/vendor/autoload.php';

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withRootFiles()
    ->withFileExtensions(['php'])
    ->withPhpSets()
    ->withPreparedSets(
        codeQuality: true,
        codingStyle: true,
        deadCode: true,
        naming: true,
        privatization: true,
        rectorPreset: true,
        typeDeclarations: true,
    )
    ->withAttributesSets(phpunit: true)
    ->withComposerBased(phpunit: true);
