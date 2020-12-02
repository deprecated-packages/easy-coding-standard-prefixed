<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperfaaf57618f34\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperfaaf57618f34\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperfaaf57618f34\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
