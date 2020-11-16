<?php

namespace _PhpScoper3e1e0e5bb8ef\Jean85;

use _PhpScoper3e1e0e5bb8ef\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3e1e0e5bb8ef\Jean85\Version
    {
        return new \_PhpScoper3e1e0e5bb8ef\Jean85\Version($packageName, \_PhpScoper3e1e0e5bb8ef\PackageVersions\Versions::getVersion($packageName));
    }
}
