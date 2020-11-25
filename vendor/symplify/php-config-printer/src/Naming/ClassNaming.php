<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperdc8fbcd7c69d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperdc8fbcd7c69d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperdc8fbcd7c69d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
