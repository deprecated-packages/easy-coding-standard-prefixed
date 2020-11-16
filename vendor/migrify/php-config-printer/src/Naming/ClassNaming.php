<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperedc2e0c967db\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperedc2e0c967db\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperedc2e0c967db\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
