<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoperba24099fc6fd\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoperba24099fc6fd\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoperba24099fc6fd\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
