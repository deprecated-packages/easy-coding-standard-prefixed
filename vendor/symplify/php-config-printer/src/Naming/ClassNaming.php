<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera061b8a47e36\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera061b8a47e36\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera061b8a47e36\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
