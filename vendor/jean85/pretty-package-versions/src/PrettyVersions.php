<?php

namespace _PhpScoper5a9febfbbe05\Jean85;

use _PhpScoper5a9febfbbe05\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5a9febfbbe05\Jean85\Version
    {
        return new \_PhpScoper5a9febfbbe05\Jean85\Version($packageName, \_PhpScoper5a9febfbbe05\PackageVersions\Versions::getVersion($packageName));
    }
}
