<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper224ae0b86670\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper224ae0b86670\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper224ae0b86670\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
