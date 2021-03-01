<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionAnalyzer;

use _PhpScoperf3dc21757def\Nette\Utils\Strings;
final class ServiceOptionAnalyzer
{
    public function hasNamedArguments(array $data) : bool
    {
        if ($data === []) {
            return \false;
        }
        foreach (\array_keys($data) as $key) {
            if (!\_PhpScoperf3dc21757def\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
}
