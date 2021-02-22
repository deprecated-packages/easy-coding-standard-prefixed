<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfcee700af3df\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfcee700af3df\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfcee700af3df\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
