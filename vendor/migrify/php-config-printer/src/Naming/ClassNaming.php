<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper7cef7256eba6\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper7cef7256eba6\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper7cef7256eba6\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
