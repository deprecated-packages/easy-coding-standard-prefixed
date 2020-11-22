<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperfacc742d2745\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfacc742d2745\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfacc742d2745\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
