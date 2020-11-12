<?php

namespace _PhpScoper7cef7256eba6\Jean85;

use _PhpScoper7cef7256eba6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7cef7256eba6\Jean85\Version
    {
        return new \_PhpScoper7cef7256eba6\Jean85\Version($packageName, \_PhpScoper7cef7256eba6\PackageVersions\Versions::getVersion($packageName));
    }
}
