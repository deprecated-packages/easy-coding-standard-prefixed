<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperaba240c3d5f1\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperaba240c3d5f1\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperaba240c3d5f1\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
