<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperc8fea59b0cb1\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc8fea59b0cb1\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc8fea59b0cb1\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
