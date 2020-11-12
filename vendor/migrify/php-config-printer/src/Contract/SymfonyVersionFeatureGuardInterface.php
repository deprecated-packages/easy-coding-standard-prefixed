<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
