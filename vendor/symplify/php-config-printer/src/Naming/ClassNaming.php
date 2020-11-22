<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperbc5235eb86f3\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperbc5235eb86f3\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperbc5235eb86f3\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
