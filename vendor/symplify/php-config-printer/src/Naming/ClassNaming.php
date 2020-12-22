<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper68a3a2539032\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper68a3a2539032\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper68a3a2539032\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
