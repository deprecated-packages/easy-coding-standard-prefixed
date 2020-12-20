<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperab9510cd5d97\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperab9510cd5d97\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperab9510cd5d97\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
