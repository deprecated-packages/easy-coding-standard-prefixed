<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperdaf95aff095b\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperdaf95aff095b\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperdaf95aff095b\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
