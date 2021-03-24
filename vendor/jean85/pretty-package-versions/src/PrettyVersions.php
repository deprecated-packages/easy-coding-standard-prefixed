<?php

declare (strict_types=1);
namespace _PhpScoper45e499ef5890\Jean85;

use Composer\InstalledVersions;
use _PhpScoper45e499ef5890\Jean85\Exception\ProvidedPackageException;
use _PhpScoper45e499ef5890\Jean85\Exception\ReplacedPackageException;
use _PhpScoper45e499ef5890\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScoper45e499ef5890\Jean85\Version
    {
        if (isset(\Composer\InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw \_PhpScoper45e499ef5890\Jean85\Exception\ProvidedPackageException::create($packageName);
        }
        if (isset(\Composer\InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw \_PhpScoper45e499ef5890\Jean85\Exception\ReplacedPackageException::create($packageName);
        }
        return new \_PhpScoper45e499ef5890\Jean85\Version($packageName, \Composer\InstalledVersions::getPrettyVersion($packageName), \Composer\InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \Composer\InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScoper45e499ef5890\Jean85\Version
    {
        return new \_PhpScoper45e499ef5890\Jean85\Version(self::getRootPackageName(), \Composer\InstalledVersions::getRootPackage()['pretty_version'], \Composer\InstalledVersions::getRootPackage()['reference']);
    }
}
