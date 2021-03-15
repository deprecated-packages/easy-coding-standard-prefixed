<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper64e7ad844899\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper64e7ad844899\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper64e7ad844899\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
