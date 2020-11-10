<?php

declare (strict_types=1);
namespace _PhpScoper470d6df94ac0\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper470d6df94ac0\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper470d6df94ac0\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper470d6df94ac0\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
