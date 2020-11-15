<?php

namespace _PhpScoper49c742f5a4ee\Jean85;

use _PhpScoper49c742f5a4ee\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper49c742f5a4ee\Jean85\Version
    {
        return new \_PhpScoper49c742f5a4ee\Jean85\Version($packageName, \_PhpScoper49c742f5a4ee\PackageVersions\Versions::getVersion($packageName));
    }
}
