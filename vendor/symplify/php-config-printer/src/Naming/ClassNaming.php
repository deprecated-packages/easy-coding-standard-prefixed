<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfa521053d812\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfa521053d812\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfa521053d812\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
