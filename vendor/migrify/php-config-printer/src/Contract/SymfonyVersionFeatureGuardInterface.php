<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
