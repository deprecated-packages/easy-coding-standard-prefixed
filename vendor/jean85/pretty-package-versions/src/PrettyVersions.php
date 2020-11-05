<?php

namespace _PhpScoper39d23eef9a06\Jean85;

use _PhpScoper39d23eef9a06\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper39d23eef9a06\Jean85\Version
    {
        return new \_PhpScoper39d23eef9a06\Jean85\Version($packageName, \_PhpScoper39d23eef9a06\PackageVersions\Versions::getVersion($packageName));
    }
}
