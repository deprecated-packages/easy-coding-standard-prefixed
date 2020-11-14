<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Reflection;

use ReflectionClass;
final class ConstantNameFromValueResolver
{
    /**
     * @param mixed $constantValue
     */
    public function resolveFromValueAndClass($constantValue, string $class) : ?string
    {
        $reflectionClass = new \ReflectionClass($class);
        foreach ($reflectionClass->getConstants() as $name => $value) {
            if ($value === $constantValue) {
                return $name;
            }
        }
        return null;
    }
}
