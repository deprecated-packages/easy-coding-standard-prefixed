<?php

namespace _PhpScoper967c4b7e296e\Jean85;

use _PhpScoper967c4b7e296e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper967c4b7e296e\Jean85\Version
    {
        return new \_PhpScoper967c4b7e296e\Jean85\Version($packageName, \_PhpScoper967c4b7e296e\PackageVersions\Versions::getVersion($packageName));
    }
}
