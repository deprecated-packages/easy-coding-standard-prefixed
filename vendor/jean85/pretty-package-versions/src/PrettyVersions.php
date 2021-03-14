<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\Jean85;

use _PhpScopera1f11cc38772\Composer\InstalledVersions;
use _PhpScopera1f11cc38772\Jean85\Exception\ProvidedPackageException;
use _PhpScopera1f11cc38772\Jean85\Exception\ReplacedPackageException;
use _PhpScopera1f11cc38772\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScopera1f11cc38772\Jean85\Version
    {
        if (isset(\_PhpScopera1f11cc38772\Composer\InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw \_PhpScopera1f11cc38772\Jean85\Exception\ProvidedPackageException::create($packageName);
        }
        if (isset(\_PhpScopera1f11cc38772\Composer\InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw \_PhpScopera1f11cc38772\Jean85\Exception\ReplacedPackageException::create($packageName);
        }
        return new \_PhpScopera1f11cc38772\Jean85\Version($packageName, \_PhpScopera1f11cc38772\Composer\InstalledVersions::getPrettyVersion($packageName), \_PhpScopera1f11cc38772\Composer\InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera1f11cc38772\Composer\InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScopera1f11cc38772\Jean85\Version
    {
        return new \_PhpScopera1f11cc38772\Jean85\Version(self::getRootPackageName(), \_PhpScopera1f11cc38772\Composer\InstalledVersions::getRootPackage()['pretty_version'], \_PhpScopera1f11cc38772\Composer\InstalledVersions::getRootPackage()['reference']);
    }
}
