<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper66292c14b658\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper66292c14b658\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper66292c14b658\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
