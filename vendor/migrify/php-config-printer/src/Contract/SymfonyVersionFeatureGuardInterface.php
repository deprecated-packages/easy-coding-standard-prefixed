<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Contract;

interface SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool;
}
