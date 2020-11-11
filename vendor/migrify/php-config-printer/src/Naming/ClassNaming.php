<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper06c66bea2cf6\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper06c66bea2cf6\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper06c66bea2cf6\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
