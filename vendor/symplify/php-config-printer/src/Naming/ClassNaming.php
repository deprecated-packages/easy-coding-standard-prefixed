<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper776637f3d3c3\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper776637f3d3c3\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper776637f3d3c3\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
