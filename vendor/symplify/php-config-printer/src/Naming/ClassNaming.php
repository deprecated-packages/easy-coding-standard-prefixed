<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd35c27cd4b09\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd35c27cd4b09\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd35c27cd4b09\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
