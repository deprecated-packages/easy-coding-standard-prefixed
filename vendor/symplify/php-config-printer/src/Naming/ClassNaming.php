<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper2f75f00bf6fa\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper2f75f00bf6fa\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper2f75f00bf6fa\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
