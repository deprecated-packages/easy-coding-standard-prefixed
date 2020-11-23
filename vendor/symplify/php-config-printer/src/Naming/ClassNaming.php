<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd4c5032f0671\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd4c5032f0671\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd4c5032f0671\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
