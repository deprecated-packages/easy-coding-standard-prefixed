<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper8e2d8a2760d1\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper8e2d8a2760d1\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper8e2d8a2760d1\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
