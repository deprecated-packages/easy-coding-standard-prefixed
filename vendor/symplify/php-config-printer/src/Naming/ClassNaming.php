<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperc4ea0f0bd23f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc4ea0f0bd23f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc4ea0f0bd23f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
