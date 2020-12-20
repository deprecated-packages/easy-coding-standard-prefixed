<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera51a90153f58\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera51a90153f58\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera51a90153f58\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
