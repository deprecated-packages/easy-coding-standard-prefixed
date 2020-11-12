<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
