<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Tests\DataProviders;

use Faker\Factory;

final class NameProvider
{
    /**
     * @api
     * @return list<array<int, string>>
     */
    public static function getNames(): array
    {
        $generator = Factory::create();
        $name = [];
        $number = 5;
        for ($i = 0; $i < $number; ++$i) {
            $value = $generator->name();
            $name[] = [$value, $value];
        }

        return $name;
    }
}
