<?php

declare (strict_types=1);
namespace _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper6207116d4311\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper6207116d4311\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper6207116d4311\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
