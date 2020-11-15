<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
