<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper5a9febfbbe05\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper5a9febfbbe05\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper5a9febfbbe05\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
