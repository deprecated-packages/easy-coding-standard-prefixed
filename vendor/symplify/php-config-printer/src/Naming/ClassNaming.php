<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper5384d7276e1f\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper5384d7276e1f\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper5384d7276e1f\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
