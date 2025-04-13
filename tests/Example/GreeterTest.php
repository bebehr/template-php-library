<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Tests\Example;

use Bebehr\TemplatePhpLibrary\Example\Greeter;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }
}
