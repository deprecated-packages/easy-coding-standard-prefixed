<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperc83f84c90b60\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc83f84c90b60\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc83f84c90b60\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
