<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
