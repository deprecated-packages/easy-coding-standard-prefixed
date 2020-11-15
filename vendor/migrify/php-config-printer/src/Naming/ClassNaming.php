<?php

declare (strict_types=1);
namespace _PhpScoper207eb8f99af3\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper207eb8f99af3\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper207eb8f99af3\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper207eb8f99af3\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
