<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Tests\Example;

use Bebehr\TemplatePhpLibrary\Example\Greeter;
use Bebehr\TemplatePhpLibrary\Tests\DataProviders\NameProvider;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @covers Bebehr\TemplatePhpLibrary\Example\Greeter
 */
final class GreeterTest extends TestCase
{
    private Greeter $greeter;

    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    #[DataProviderExternal(NameProvider::class, 'getNames')]
    public function testGreetsWithName(
        string $name,
        string $expectedName,
    ): void {
        $greeting = $this->greeter->greet($name);

        $expected = sprintf('Hello, %s!', $expectedName);
        self::assertSame($expected, $greeting);
    }

    public function testGreetWithEmptyNameThrowsException(): void
    {
        $name = '';

        self::expectException(InvalidArgumentException::class);
        $this->greeter->greet($name);
    }
}
