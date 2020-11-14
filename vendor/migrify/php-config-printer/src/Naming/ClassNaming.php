<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Naming;

use _PhpScopercda2b863d098\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopercda2b863d098\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopercda2b863d098\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
