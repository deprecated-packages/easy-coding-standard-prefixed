<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper87c77ad5700d\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper87c77ad5700d\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper87c77ad5700d\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
