<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper578a67c80b2b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper578a67c80b2b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper578a67c80b2b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
