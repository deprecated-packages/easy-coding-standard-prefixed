<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
final class DummySymfonyVersionFeatureGuard implements \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface
{
    public function isAtLeastSymfonyVersion(float $symfonyVersion) : bool
    {
        return \true;
    }
}
