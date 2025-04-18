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

    #[\PHPUnit\Framework\Attributes\DataProvider('nameProvider')]
    public function testGreetWithNameByProvider(
        string $name,
        string $expectedName,
    ): void {
        $greeter = new Greeter();

        $greeting = $greeter->greet($name);

        $expected = sprintf('Hello, %s!', $expectedName);
        self::assertSame($expected, $greeting);
    }

    public function testGreetWithEmptyNameThrowsException(): void
    {
        $greeter = new Greeter();
        $name = '';

        self::expectException(InvalidArgumentException::class);
        $greeter->greet($name);
    }

    /**
     * @api
     * @return list<array<int, string>>
     */
    public static function nameProvider(): array
    {
        $generator = Factory::create();
        $name = [];
        for ($i = 0; $i <= 4; ++$i) {
            $value = $generator->name();
            $name[] = [$value, $value];
        }

        return $name;
    }
}
