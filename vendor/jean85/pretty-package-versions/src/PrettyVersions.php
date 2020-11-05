<?php

namespace _PhpScoper6ec31b85adcf\Jean85;

use _PhpScoper6ec31b85adcf\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6ec31b85adcf\Jean85\Version
    {
        return new \_PhpScoper6ec31b85adcf\Jean85\Version($packageName, \_PhpScoper6ec31b85adcf\PackageVersions\Versions::getVersion($packageName));
    }
}
