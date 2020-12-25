<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper15c5423f4731\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper15c5423f4731\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper15c5423f4731\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
