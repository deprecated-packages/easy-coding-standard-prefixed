<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper4f985154d5a0\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper4f985154d5a0\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper4f985154d5a0\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
