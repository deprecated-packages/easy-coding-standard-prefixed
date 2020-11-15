<?php

namespace _PhpScoper207eb8f99af3\Jean85;

use _PhpScoper207eb8f99af3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper207eb8f99af3\Jean85\Version
    {
        return new \_PhpScoper207eb8f99af3\Jean85\Version($packageName, \_PhpScoper207eb8f99af3\PackageVersions\Versions::getVersion($packageName));
    }
}
