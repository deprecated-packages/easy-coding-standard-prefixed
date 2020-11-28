<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperc8b83ee8976a\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc8b83ee8976a\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc8b83ee8976a\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
