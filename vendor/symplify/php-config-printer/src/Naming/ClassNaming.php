<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperd1a5bf00e83e\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperd1a5bf00e83e\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperd1a5bf00e83e\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
