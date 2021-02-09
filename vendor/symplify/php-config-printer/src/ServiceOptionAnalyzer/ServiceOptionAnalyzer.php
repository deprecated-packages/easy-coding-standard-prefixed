<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionAnalyzer;

use _PhpScoper807f8e74693b\Nette\Utils\Strings;
final class ServiceOptionAnalyzer
{
    public function hasNamedArguments(array $data) : bool
    {
        if ($data === []) {
            return \false;
        }
        foreach (\array_keys($data) as $key) {
            if (!\_PhpScoper807f8e74693b\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
}
