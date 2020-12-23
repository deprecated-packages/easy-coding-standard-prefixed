<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd9fcac9e904f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd9fcac9e904f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd9fcac9e904f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
