<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper1103e00fb46b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper1103e00fb46b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper1103e00fb46b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
