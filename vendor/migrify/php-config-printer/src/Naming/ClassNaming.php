<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper229e8121cf9f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper229e8121cf9f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper229e8121cf9f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
