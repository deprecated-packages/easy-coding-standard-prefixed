<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera88a8b9f064a\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera88a8b9f064a\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera88a8b9f064a\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
