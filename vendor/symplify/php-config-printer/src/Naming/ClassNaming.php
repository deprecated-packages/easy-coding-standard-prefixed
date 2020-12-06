<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper3e8786a75afe\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper3e8786a75afe\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper3e8786a75afe\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
