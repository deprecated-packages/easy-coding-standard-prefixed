<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperc753ccca5a0c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc753ccca5a0c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc753ccca5a0c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
