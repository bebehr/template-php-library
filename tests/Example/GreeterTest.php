<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Tests\Example;

use Bebehr\TemplatePhpLibrary\Example\Greeter;
use Faker\Factory;
use Faker\Generator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Bebehr\TemplatePhpLibrary\Example\Greeter
 */
final class GreeterTest extends TestCase
{
    private Generator $generator;

    protected function setUp(): void
    {
        $this->generator = Factory::create();
    }

    public function testGreetWithName(): void
    {
        $greeter = new Greeter();
        $name = $this->generator->name();

        $greeting = $greeter->greet($name);

        $expected = sprintf('Hello, %s!', $name);
        self::assertSame($expected, $greeting);
    }

    public function testGreetWithEmptyNameThwowsException(): void
    {
        $greeter = new Greeter();
        $name = '';

        self::expectException(InvalidArgumentException::class);
        $greeter->greet($name);
    }
}
