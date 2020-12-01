<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd74b3ed28382\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd74b3ed28382\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd74b3ed28382\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
