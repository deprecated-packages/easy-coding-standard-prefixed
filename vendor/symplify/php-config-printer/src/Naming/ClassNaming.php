<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera40fc53e636b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera40fc53e636b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera40fc53e636b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
