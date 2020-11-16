<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper239b374a39c8\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper239b374a39c8\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper239b374a39c8\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
