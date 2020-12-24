<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera37d6fb0b1ab\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
