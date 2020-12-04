<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera04bf8e97c06\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera04bf8e97c06\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera04bf8e97c06\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
