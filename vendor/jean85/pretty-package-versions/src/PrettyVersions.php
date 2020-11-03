<?php

namespace _PhpScoper589e8c04a9ef\Jean85;

use _PhpScoper589e8c04a9ef\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper589e8c04a9ef\Jean85\Version
    {
        return new \_PhpScoper589e8c04a9ef\Jean85\Version($packageName, \_PhpScoper589e8c04a9ef\PackageVersions\Versions::getVersion($packageName));
    }
}
