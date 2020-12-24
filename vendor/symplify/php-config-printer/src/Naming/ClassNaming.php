<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper629192f0909b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper629192f0909b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper629192f0909b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
