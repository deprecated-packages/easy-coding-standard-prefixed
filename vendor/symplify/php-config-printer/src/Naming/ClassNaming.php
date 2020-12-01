<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper6dbb854503f8\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper6dbb854503f8\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper6dbb854503f8\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
