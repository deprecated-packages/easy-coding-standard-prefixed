<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
