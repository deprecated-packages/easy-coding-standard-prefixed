<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper418afc2f157c\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper418afc2f157c\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper418afc2f157c\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
