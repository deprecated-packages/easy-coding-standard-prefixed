<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperdeea1786e972\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperdeea1786e972\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperdeea1786e972\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
