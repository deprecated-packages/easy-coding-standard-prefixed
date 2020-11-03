<?php

namespace _PhpScoper7f41430b5328\Jean85;

use _PhpScoper7f41430b5328\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7f41430b5328\Jean85\Version
    {
        return new \_PhpScoper7f41430b5328\Jean85\Version($packageName, \_PhpScoper7f41430b5328\PackageVersions\Versions::getVersion($packageName));
    }
}
