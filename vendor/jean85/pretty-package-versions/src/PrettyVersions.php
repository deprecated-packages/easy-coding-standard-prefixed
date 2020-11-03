<?php

namespace _PhpScoper3d04c8135695\Jean85;

use _PhpScoper3d04c8135695\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3d04c8135695\Jean85\Version
    {
        return new \_PhpScoper3d04c8135695\Jean85\Version($packageName, \_PhpScoper3d04c8135695\PackageVersions\Versions::getVersion($packageName));
    }
}
