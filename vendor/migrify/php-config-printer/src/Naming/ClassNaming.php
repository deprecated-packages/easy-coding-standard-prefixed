<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperddde3ba4aebc\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperddde3ba4aebc\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperddde3ba4aebc\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
