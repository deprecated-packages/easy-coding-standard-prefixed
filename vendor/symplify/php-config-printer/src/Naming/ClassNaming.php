<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper9e3283ae8193\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper9e3283ae8193\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper9e3283ae8193\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
