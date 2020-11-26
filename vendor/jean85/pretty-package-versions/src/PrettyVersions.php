<?php

namespace _PhpScoper4a718ec9156e\Jean85;

use _PhpScoper4a718ec9156e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4a718ec9156e\Jean85\Version
    {
        return new \_PhpScoper4a718ec9156e\Jean85\Version($packageName, \_PhpScoper4a718ec9156e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper4a718ec9156e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper4a718ec9156e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper4a718ec9156e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
