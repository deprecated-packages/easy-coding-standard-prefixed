<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Naming;

use _PhpScopera749ac204cd2\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera749ac204cd2\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera749ac204cd2\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
