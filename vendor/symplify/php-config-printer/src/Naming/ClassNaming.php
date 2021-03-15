<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper8a7636b3fdaf\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper8a7636b3fdaf\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper8a7636b3fdaf\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
