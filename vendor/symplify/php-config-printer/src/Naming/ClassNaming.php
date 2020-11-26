<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Naming;

use _PhpScoper4a718ec9156e\Nette\Utils\Strings;
final class ClassNaming
{
    public function getShortName(string $class) : string
    {
        if (\_PhpScoper4a718ec9156e\Nette\Utils\Strings::contains($class, '\\')) {
            return (string) \_PhpScoper4a718ec9156e\Nette\Utils\Strings::after($class, '\\', -1);
        }
        return $class;
    }
}
