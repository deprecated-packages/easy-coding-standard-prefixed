<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperb6d4bd368bd9\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb6d4bd368bd9\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb6d4bd368bd9\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
