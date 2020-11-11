<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper2fe14d6302bc\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper2fe14d6302bc\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper2fe14d6302bc\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
