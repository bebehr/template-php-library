<?php

declare(strict_types=1);

namespace Bebehr\TemplatePhpLibrary\Example;

use InvalidArgumentException;

final class Greeter
{
    /**
     * @throws InvalidArgumentException
     */
    public function greet(string $name): string
    {
        if ($name === '') {
            throw new InvalidArgumentException('$name must not be empty.');
        }

        return 'Hello, ' . $name . '!';
    }
}
