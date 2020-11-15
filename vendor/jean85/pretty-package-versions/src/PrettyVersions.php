<?php

namespace _PhpScoper70072c07b02b\Jean85;

use _PhpScoper70072c07b02b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper70072c07b02b\Jean85\Version
    {
        return new \_PhpScoper70072c07b02b\Jean85\Version($packageName, \_PhpScoper70072c07b02b\PackageVersions\Versions::getVersion($packageName));
    }
}
