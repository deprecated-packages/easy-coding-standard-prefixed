<?php

namespace _PhpScoper7145e5e87de5\Jean85;

use _PhpScoper7145e5e87de5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7145e5e87de5\Jean85\Version
    {
        return new \_PhpScoper7145e5e87de5\Jean85\Version($packageName, \_PhpScoper7145e5e87de5\PackageVersions\Versions::getVersion($packageName));
    }
}
