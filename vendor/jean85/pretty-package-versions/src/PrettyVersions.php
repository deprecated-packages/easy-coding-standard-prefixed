<?php

namespace _PhpScoper2b44cb0c30af\Jean85;

use _PhpScoper2b44cb0c30af\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper2b44cb0c30af\Jean85\Version
    {
        return new \_PhpScoper2b44cb0c30af\Jean85\Version($packageName, \_PhpScoper2b44cb0c30af\PackageVersions\Versions::getVersion($packageName));
    }
}
