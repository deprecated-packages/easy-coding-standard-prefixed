<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperb36402634947\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperb36402634947\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperb36402634947\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
