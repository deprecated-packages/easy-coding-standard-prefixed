<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper7574e8786845\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper7574e8786845\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper7574e8786845\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
