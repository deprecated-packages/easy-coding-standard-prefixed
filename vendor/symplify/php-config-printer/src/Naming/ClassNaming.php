<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfab1bfb7ec99\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfab1bfb7ec99\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfab1bfb7ec99\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
