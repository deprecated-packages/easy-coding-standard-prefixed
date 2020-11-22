<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperac4e86be08e5\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperac4e86be08e5\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperac4e86be08e5\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
