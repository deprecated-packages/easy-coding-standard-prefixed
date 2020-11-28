<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfcce67077a55\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfcce67077a55\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfcce67077a55\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
