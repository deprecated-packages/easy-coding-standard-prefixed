<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperef5048aa2573\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperef5048aa2573\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperef5048aa2573\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
