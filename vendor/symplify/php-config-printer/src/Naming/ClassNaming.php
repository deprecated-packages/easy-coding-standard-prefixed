<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperb2e2c0c42e71\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb2e2c0c42e71\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb2e2c0c42e71\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
