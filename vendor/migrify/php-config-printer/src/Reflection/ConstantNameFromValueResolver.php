<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Reflection;

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
