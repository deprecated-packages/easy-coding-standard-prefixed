<?php

namespace _PhpScoper61bdb485188f\Jean85;

use _PhpScoper61bdb485188f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper61bdb485188f\Jean85\Version
    {
        return new \_PhpScoper61bdb485188f\Jean85\Version($packageName, \_PhpScoper61bdb485188f\PackageVersions\Versions::getVersion($packageName));
    }
}
