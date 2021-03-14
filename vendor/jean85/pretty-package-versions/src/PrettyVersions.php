<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6\Jean85;

use _PhpScopere050faf861e6\Composer\InstalledVersions;
use _PhpScopere050faf861e6\Jean85\Exception\ProvidedPackageException;
use _PhpScopere050faf861e6\Jean85\Exception\ReplacedPackageException;
use _PhpScopere050faf861e6\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScopere050faf861e6\Jean85\Version
    {
        if (isset(\_PhpScopere050faf861e6\Composer\InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw \_PhpScopere050faf861e6\Jean85\Exception\ProvidedPackageException::create($packageName);
        }
        if (isset(\_PhpScopere050faf861e6\Composer\InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw \_PhpScopere050faf861e6\Jean85\Exception\ReplacedPackageException::create($packageName);
        }
        return new \_PhpScopere050faf861e6\Jean85\Version($packageName, \_PhpScopere050faf861e6\Composer\InstalledVersions::getPrettyVersion($packageName), \_PhpScopere050faf861e6\Composer\InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere050faf861e6\Composer\InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScopere050faf861e6\Jean85\Version
    {
        return new \_PhpScopere050faf861e6\Jean85\Version(self::getRootPackageName(), \_PhpScopere050faf861e6\Composer\InstalledVersions::getRootPackage()['pretty_version'], \_PhpScopere050faf861e6\Composer\InstalledVersions::getRootPackage()['reference']);
    }
}
