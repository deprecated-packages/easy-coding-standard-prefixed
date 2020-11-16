<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperdf6a0b341030\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperdf6a0b341030\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperdf6a0b341030\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
