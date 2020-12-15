<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper47644ab3aa9a\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper47644ab3aa9a\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper47644ab3aa9a\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
