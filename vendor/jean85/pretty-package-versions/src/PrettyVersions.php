<?php

namespace _PhpScoper224ae0b86670\Jean85;

use _PhpScoper224ae0b86670\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper224ae0b86670\Jean85\Version
    {
        return new \_PhpScoper224ae0b86670\Jean85\Version($packageName, \_PhpScoper224ae0b86670\PackageVersions\Versions::getVersion($packageName));
    }
}
