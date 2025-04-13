<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Example;

final class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}
