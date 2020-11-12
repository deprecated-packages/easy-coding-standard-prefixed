<?php

namespace _PhpScoper3d6b50c3ca2f\Jean85;

use _PhpScoper3d6b50c3ca2f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3d6b50c3ca2f\Jean85\Version
    {
        return new \_PhpScoper3d6b50c3ca2f\Jean85\Version($packageName, \_PhpScoper3d6b50c3ca2f\PackageVersions\Versions::getVersion($packageName));
    }
}
