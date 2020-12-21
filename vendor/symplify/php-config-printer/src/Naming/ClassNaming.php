<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperb730595bc9f4\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb730595bc9f4\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb730595bc9f4\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
