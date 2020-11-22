<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper6db4fde00cda\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper6db4fde00cda\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper6db4fde00cda\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
