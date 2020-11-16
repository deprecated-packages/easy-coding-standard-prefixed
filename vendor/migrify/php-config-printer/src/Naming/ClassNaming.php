<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Naming;

use _PhpScopera9d6b451df71\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera9d6b451df71\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera9d6b451df71\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
