<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
