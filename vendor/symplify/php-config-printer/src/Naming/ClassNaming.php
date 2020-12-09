<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperf65af7a6d9a0\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperf65af7a6d9a0\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperf65af7a6d9a0\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
