<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfb0714773dc5\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfb0714773dc5\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfb0714773dc5\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
