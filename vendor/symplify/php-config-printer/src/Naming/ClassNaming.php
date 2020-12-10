<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera1a51450b61d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera1a51450b61d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera1a51450b61d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
