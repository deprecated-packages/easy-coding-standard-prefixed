<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper3b1d73f28e67\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper3b1d73f28e67\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper3b1d73f28e67\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
