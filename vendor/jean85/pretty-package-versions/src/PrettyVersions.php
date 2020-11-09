<?php

namespace _PhpScoper880bfa4d8b51\Jean85;

use _PhpScoper880bfa4d8b51\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper880bfa4d8b51\Jean85\Version
    {
        return new \_PhpScoper880bfa4d8b51\Jean85\Version($packageName, \_PhpScoper880bfa4d8b51\PackageVersions\Versions::getVersion($packageName));
    }
}
