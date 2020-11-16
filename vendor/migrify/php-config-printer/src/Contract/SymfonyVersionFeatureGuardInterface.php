<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
