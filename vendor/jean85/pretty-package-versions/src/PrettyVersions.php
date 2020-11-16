<?php

namespace _PhpScoper1103e00fb46b\Jean85;

use _PhpScoper1103e00fb46b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper1103e00fb46b\Jean85\Version
    {
        return new \_PhpScoper1103e00fb46b\Jean85\Version($packageName, \_PhpScoper1103e00fb46b\PackageVersions\Versions::getVersion($packageName));
    }
}
