<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
