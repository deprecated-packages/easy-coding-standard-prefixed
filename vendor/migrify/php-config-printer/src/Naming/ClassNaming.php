<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Naming;

use _PhpScoperad4b7e2c09d8\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperad4b7e2c09d8\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperad4b7e2c09d8\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
