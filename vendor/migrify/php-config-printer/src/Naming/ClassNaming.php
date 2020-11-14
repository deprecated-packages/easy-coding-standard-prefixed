<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\Migrify\PhpConfigPrinter\Naming;

use _PhpScoper4936962185e7\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper4936962185e7\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper4936962185e7\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
