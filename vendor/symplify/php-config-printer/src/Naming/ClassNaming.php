<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfa7254c25e18\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfa7254c25e18\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfa7254c25e18\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
