<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper967c4b7e296e\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper967c4b7e296e\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper967c4b7e296e\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
