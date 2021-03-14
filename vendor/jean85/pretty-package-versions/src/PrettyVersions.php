<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\Jean85;

use _PhpScoperfb0714773dc5\Composer\InstalledVersions;
use _PhpScoperfb0714773dc5\Jean85\Exception\ProvidedPackageException;
use _PhpScoperfb0714773dc5\Jean85\Exception\ReplacedPackageException;
use _PhpScoperfb0714773dc5\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScoperfb0714773dc5\Jean85\Version
    {
        if (isset(\_PhpScoperfb0714773dc5\Composer\InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw \_PhpScoperfb0714773dc5\Jean85\Exception\ProvidedPackageException::create($packageName);
        }
        if (isset(\_PhpScoperfb0714773dc5\Composer\InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw \_PhpScoperfb0714773dc5\Jean85\Exception\ReplacedPackageException::create($packageName);
        }
        return new \_PhpScoperfb0714773dc5\Jean85\Version($packageName, \_PhpScoperfb0714773dc5\Composer\InstalledVersions::getPrettyVersion($packageName), \_PhpScoperfb0714773dc5\Composer\InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfb0714773dc5\Composer\InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScoperfb0714773dc5\Jean85\Version
    {
        return new \_PhpScoperfb0714773dc5\Jean85\Version(self::getRootPackageName(), \_PhpScoperfb0714773dc5\Composer\InstalledVersions::getRootPackage()['pretty_version'], \_PhpScoperfb0714773dc5\Composer\InstalledVersions::getRootPackage()['reference']);
    }
}
