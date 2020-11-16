<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper3e1e0e5bb8ef\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper3e1e0e5bb8ef\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper3e1e0e5bb8ef\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
