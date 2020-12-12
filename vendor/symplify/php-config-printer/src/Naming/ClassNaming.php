<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper83b3b9a317c0\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper83b3b9a317c0\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper83b3b9a317c0\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
