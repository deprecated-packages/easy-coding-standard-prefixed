<?php

namespace _PhpScoper4d05106cc3c0\Jean85;

use _PhpScoper4d05106cc3c0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4d05106cc3c0\Jean85\Version
    {
        return new \_PhpScoper4d05106cc3c0\Jean85\Version($packageName, \_PhpScoper4d05106cc3c0\PackageVersions\Versions::getVersion($packageName));
    }
}
