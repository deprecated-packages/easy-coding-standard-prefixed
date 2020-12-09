<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper31ba553edf97\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper31ba553edf97\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper31ba553edf97\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
