<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper842c7347e6be\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper842c7347e6be\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper842c7347e6be\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
