<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperd9c3b46af121\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd9c3b46af121\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd9c3b46af121\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
