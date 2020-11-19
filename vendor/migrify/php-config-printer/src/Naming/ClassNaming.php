<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper63567e560066\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper63567e560066\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper63567e560066\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
