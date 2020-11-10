<?php

namespace _PhpScoper470d6df94ac0\Jean85;

use _PhpScoper470d6df94ac0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper470d6df94ac0\Jean85\Version
    {
        return new \_PhpScoper470d6df94ac0\Jean85\Version($packageName, \_PhpScoper470d6df94ac0\PackageVersions\Versions::getVersion($packageName));
    }
}
