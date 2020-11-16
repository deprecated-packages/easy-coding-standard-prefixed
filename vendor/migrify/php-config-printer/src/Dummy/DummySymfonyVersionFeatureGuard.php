<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
