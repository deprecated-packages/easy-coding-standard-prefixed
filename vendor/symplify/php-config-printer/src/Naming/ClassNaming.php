<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper7f5523334c1b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper7f5523334c1b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper7f5523334c1b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
