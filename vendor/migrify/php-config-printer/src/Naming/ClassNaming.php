<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper64a921a5401b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper64a921a5401b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper64a921a5401b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
