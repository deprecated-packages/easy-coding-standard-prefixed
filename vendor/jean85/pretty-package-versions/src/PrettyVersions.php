<?php

namespace _PhpScoper666af036e800\Jean85;

use _PhpScoper666af036e800\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper666af036e800\Jean85\Version
    {
        return new \_PhpScoper666af036e800\Jean85\Version($packageName, \_PhpScoper666af036e800\PackageVersions\Versions::getVersion($packageName));
    }
}
