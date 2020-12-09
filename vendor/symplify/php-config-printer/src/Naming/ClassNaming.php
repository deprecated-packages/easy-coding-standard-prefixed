<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperdf15f2b748e9\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperdf15f2b748e9\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperdf15f2b748e9\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
