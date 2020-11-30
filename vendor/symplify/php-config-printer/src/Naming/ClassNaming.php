<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera09818bc50da\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera09818bc50da\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera09818bc50da\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
