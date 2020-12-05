<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper81b3ff5ab9fe\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper81b3ff5ab9fe\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper81b3ff5ab9fe\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
