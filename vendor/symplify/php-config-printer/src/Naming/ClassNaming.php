<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopereb8678af2407\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopereb8678af2407\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopereb8678af2407\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
