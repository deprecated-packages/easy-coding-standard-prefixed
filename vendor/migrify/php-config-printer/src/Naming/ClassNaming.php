<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper279cf54b77ad\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper279cf54b77ad\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper279cf54b77ad\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
