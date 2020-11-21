<?php

declare (strict_types=1);
namespace _PhpScoper3639953bb9e5\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper3639953bb9e5\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper3639953bb9e5\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper3639953bb9e5\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
