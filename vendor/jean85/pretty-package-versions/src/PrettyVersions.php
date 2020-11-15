<?php

namespace _PhpScoper21763e6c7ac4\Jean85;

use _PhpScoper21763e6c7ac4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper21763e6c7ac4\Jean85\Version
    {
        return new \_PhpScoper21763e6c7ac4\Jean85\Version($packageName, \_PhpScoper21763e6c7ac4\PackageVersions\Versions::getVersion($packageName));
    }
}
