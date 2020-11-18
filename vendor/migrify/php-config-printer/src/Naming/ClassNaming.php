<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperf77bffce0320\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperf77bffce0320\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperf77bffce0320\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
