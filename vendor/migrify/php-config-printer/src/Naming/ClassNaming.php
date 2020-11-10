<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper48800f361566\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper48800f361566\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper48800f361566\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
