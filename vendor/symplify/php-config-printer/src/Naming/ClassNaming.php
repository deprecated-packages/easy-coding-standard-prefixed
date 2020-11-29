<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopercae980ebf12d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopercae980ebf12d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopercae980ebf12d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
