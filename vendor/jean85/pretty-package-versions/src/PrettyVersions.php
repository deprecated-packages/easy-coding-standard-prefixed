<?php

namespace _PhpScoper83a475a0590e\Jean85;

use _PhpScoper83a475a0590e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper83a475a0590e\Jean85\Version
    {
        return new \_PhpScoper83a475a0590e\Jean85\Version($packageName, \_PhpScoper83a475a0590e\PackageVersions\Versions::getVersion($packageName));
    }
}
