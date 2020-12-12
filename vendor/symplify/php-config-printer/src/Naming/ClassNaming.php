<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper79449c4e744b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper79449c4e744b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper79449c4e744b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
