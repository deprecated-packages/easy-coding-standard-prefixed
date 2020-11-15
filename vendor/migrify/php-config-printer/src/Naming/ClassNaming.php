<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper70072c07b02b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper70072c07b02b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper70072c07b02b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
