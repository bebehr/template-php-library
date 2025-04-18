<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets()
    ->withPreparedSets(codeQuality: true)
    ->withPreparedSets(codingStyle: true)
    ->withPreparedSets(deadCode: true)
    ->withPreparedSets(naming: true)
    ->withPreparedSets(privatization: true)
    ->withPreparedSets(rectorPreset: true)
    ->withPreparedSets(typeDeclarations: true);
