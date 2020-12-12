<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperbd5c5a045153\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperbd5c5a045153\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperbd5c5a045153\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
