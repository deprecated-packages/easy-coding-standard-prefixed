<?php

namespace _PhpScoper48800f361566\Jean85;

use _PhpScoper48800f361566\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper48800f361566\Jean85\Version
    {
        return new \_PhpScoper48800f361566\Jean85\Version($packageName, \_PhpScoper48800f361566\PackageVersions\Versions::getVersion($packageName));
    }
}
