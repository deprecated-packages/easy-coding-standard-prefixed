<?php

namespace _PhpScoperdebd9d705540\Jean85;

use _PhpScoperdebd9d705540\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdebd9d705540\Jean85\Version
    {
        return new \_PhpScoperdebd9d705540\Jean85\Version($packageName, \_PhpScoperdebd9d705540\PackageVersions\Versions::getVersion($packageName));
    }
}
