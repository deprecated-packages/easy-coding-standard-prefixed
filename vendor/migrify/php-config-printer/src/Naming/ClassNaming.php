<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperbcc0395698f8\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperbcc0395698f8\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperbcc0395698f8\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
