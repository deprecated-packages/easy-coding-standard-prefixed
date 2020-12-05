<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper02b5d1bf8fec\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper02b5d1bf8fec\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper02b5d1bf8fec\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
