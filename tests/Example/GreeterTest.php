<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Tests\Example;

use Bebehr\TemplatePhpLibrary\Example\Greeter;
use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

/**
 * @covers Bebehr\TemplatePhpLibrary\Example\Greeter
 */
final class GreeterTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create();
    }

    public function testGreetsWithName(): void
    {
        $greeter = new Greeter();
        $name = $this->faker->name();

        $greeting = $greeter->greet($name);
        $expected = "Hello, {$name}!";

        self::assertSame($expected, $greeting);
    }
}
