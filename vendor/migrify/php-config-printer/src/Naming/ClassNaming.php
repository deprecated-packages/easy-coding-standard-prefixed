<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperd4937ee9b515\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd4937ee9b515\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd4937ee9b515\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
