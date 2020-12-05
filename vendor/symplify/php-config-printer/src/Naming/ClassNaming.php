<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper59ccd3f8e121\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper59ccd3f8e121\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper59ccd3f8e121\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
