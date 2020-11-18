<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper0270f1d35181\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper0270f1d35181\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper0270f1d35181\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
