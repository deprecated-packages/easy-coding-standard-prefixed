<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
