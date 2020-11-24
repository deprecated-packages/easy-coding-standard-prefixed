<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperf3d5f0921050\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperf3d5f0921050\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperf3d5f0921050\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
