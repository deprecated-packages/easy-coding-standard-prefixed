<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfd70a7e8e84f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfd70a7e8e84f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfd70a7e8e84f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
