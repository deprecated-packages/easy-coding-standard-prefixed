<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper28ab463fc3ba\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper28ab463fc3ba\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper28ab463fc3ba\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
