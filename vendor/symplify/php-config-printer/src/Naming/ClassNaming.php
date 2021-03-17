<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopera3425146d487\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera3425146d487\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera3425146d487\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
