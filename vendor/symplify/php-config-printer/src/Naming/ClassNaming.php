<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopere341acab57d4\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopere341acab57d4\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopere341acab57d4\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
