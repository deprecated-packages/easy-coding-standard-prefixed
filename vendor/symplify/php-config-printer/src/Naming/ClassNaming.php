<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper9ef667a5e42c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper9ef667a5e42c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper9ef667a5e42c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
