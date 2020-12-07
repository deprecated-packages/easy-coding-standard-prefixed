<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperb73f9e44f4eb\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb73f9e44f4eb\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb73f9e44f4eb\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
