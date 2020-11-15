<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Naming;

use _PhpScopercb576ca159b5\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopercb576ca159b5\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopercb576ca159b5\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
