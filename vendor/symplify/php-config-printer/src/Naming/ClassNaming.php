<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopere4fa57261c04\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopere4fa57261c04\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopere4fa57261c04\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
