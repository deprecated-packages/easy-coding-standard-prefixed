<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper06c5fb6c14ed\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper06c5fb6c14ed\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper06c5fb6c14ed\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
