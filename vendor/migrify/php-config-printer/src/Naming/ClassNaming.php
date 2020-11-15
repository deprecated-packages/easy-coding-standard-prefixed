<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Naming;

use _PhpScopera189153e1f79\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopera189153e1f79\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopera189153e1f79\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
