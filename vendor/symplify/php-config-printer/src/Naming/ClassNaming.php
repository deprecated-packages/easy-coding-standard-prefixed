<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper967d20dce97a\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper967d20dce97a\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper967d20dce97a\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
