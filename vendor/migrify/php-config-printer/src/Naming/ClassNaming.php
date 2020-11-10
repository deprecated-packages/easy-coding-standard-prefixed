<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper666af036e800\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper666af036e800\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper666af036e800\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
