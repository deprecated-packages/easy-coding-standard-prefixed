<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper3d6b50c3ca2f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper3d6b50c3ca2f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper3d6b50c3ca2f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
