<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperad4605bb9267\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperad4605bb9267\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperad4605bb9267\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
