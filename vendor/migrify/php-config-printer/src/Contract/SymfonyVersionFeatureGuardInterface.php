<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
