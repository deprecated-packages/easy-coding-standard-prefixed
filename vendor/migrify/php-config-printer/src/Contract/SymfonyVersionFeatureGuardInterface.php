<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
