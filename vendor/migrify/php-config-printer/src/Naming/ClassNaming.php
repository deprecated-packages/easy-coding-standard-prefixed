<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperecb978830f1e\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperecb978830f1e\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperecb978830f1e\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
