<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
