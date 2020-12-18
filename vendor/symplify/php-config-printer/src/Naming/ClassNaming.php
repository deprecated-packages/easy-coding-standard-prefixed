<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd8b12759ee0d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd8b12759ee0d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd8b12759ee0d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
