<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper069ebd53a518\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper069ebd53a518\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper069ebd53a518\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
