<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperef870243cfdb\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperef870243cfdb\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperef870243cfdb\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
