<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera8f555a7493c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera8f555a7493c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera8f555a7493c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
