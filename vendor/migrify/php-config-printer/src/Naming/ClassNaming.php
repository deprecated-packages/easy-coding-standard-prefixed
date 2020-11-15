<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper49c742f5a4ee\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper49c742f5a4ee\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper49c742f5a4ee\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
