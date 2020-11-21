<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Naming;

use _PhpScopera4be459e5e3d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera4be459e5e3d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera4be459e5e3d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
