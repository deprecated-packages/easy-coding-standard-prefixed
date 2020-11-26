<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScopercb217fd4e736\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScopercb217fd4e736\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScopercb217fd4e736\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
