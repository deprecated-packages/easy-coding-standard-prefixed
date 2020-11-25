<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperaac5f7c652e4\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperaac5f7c652e4\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperaac5f7c652e4\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
