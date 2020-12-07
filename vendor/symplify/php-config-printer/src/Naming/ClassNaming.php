<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperda2604e33acb\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperda2604e33acb\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperda2604e33acb\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
