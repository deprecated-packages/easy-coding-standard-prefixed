<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperf7b66f9e3817\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperf7b66f9e3817\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperf7b66f9e3817\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
