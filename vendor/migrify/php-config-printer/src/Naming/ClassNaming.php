<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper4d05106cc3c0\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper4d05106cc3c0\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper4d05106cc3c0\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
