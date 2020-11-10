<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper0c236037eb04\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper0c236037eb04\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper0c236037eb04\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
