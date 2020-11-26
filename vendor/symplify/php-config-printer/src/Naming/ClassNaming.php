<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper167729fa1dde\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper167729fa1dde\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper167729fa1dde\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
