<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper6a1dd9b8a650\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper6a1dd9b8a650\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper6a1dd9b8a650\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
