<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper0f5cd390c37a\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper0f5cd390c37a\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper0f5cd390c37a\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
