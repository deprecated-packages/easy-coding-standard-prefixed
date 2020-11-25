<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd301db66c80c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd301db66c80c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd301db66c80c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
