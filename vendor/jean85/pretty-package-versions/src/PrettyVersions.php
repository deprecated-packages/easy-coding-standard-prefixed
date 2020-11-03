<?php

namespace _PhpScoper8de082cbb8c7\Jean85;

use _PhpScoper8de082cbb8c7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8de082cbb8c7\Jean85\Version
    {
        return new \_PhpScoper8de082cbb8c7\Jean85\Version($packageName, \_PhpScoper8de082cbb8c7\PackageVersions\Versions::getVersion($packageName));
    }
}
