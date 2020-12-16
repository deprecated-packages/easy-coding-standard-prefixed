<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperb6a8e65b492c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb6a8e65b492c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb6a8e65b492c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
