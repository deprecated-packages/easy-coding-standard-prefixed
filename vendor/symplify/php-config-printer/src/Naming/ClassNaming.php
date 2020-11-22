<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperc5bee3a837bb\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperc5bee3a837bb\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperc5bee3a837bb\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
