<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopercf909b66eba8\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopercf909b66eba8\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopercf909b66eba8\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
