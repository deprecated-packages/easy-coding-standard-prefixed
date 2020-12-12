<?php

namespace _PhpScoperdaf95aff095b\Jean85;

use _PhpScoperdaf95aff095b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdaf95aff095b\Jean85\Version
    {
        return new \_PhpScoperdaf95aff095b\Jean85\Version($packageName, \_PhpScoperdaf95aff095b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdaf95aff095b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdaf95aff095b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdaf95aff095b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
