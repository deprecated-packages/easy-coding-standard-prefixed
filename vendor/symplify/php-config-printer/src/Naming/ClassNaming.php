<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper1e80a2e03314\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper1e80a2e03314\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper1e80a2e03314\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
