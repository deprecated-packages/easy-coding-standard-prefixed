<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PackageVersions;

use _PhpScoper326af2119eba\Composer\Composer;
use _PhpScoper326af2119eba\Composer\Config;
use _PhpScoper326af2119eba\Composer\EventDispatcher\EventSubscriberInterface;
use _PhpScoper326af2119eba\Composer\IO\IOInterface;
use _PhpScoper326af2119eba\Composer\Package\AliasPackage;
use _PhpScoper326af2119eba\Composer\Package\Locker;
use _PhpScoper326af2119eba\Composer\Package\PackageInterface;
use _PhpScoper326af2119eba\Composer\Package\RootPackageInterface;
use _PhpScoper326af2119eba\Composer\Plugin\PluginInterface;
use _PhpScoper326af2119eba\Composer\Script\Event;
use _PhpScoper326af2119eba\Composer\Script\ScriptEvents;
use Generator;
use RuntimeException;
use function array_key_exists;
use function array_merge;
use function chmod;
use function dirname;
use function file_exists;
use function file_put_contents;
use function is_writable;
use function iterator_to_array;
use function rename;
use function sprintf;
use function uniqid;
use function var_export;
final class Installer implements \_PhpScoper326af2119eba\Composer\Plugin\PluginInterface, \_PhpScoper326af2119eba\Composer\EventDispatcher\EventSubscriberInterface
{
    private static $generatedClassTemplate = <<<'PHP'
<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
%s
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '%s';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = %s;

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}

PHP;
    public function activate(\_PhpScoper326af2119eba\Composer\Composer $composer, \_PhpScoper326af2119eba\Composer\IO\IOInterface $io)
    {
        // Nothing to do here, as all features are provided through event listeners
    }
    public function deactivate(\_PhpScoper326af2119eba\Composer\Composer $composer, \_PhpScoper326af2119eba\Composer\IO\IOInterface $io)
    {
        // Nothing to do here, as all features are provided through event listeners
    }
    public function uninstall(\_PhpScoper326af2119eba\Composer\Composer $composer, \_PhpScoper326af2119eba\Composer\IO\IOInterface $io)
    {
        // Nothing to do here, as all features are provided through event listeners
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoper326af2119eba\Composer\Script\ScriptEvents::POST_AUTOLOAD_DUMP => 'dumpVersionsClass'];
    }
    /**
     * @throws RuntimeException
     */
    public static function dumpVersionsClass(\_PhpScoper326af2119eba\Composer\Script\Event $composerEvent)
    {
        $composer = $composerEvent->getComposer();
        $rootPackage = $composer->getPackage();
        $versions = \iterator_to_array(self::getVersions($composer->getLocker(), $rootPackage));
        if (!\array_key_exists('composer/package-versions-deprecated', $versions)) {
            //plugin must be globally installed - we only want to generate versions for projects which specifically
            //require composer/package-versions-deprecated
            return;
        }
        $versionClass = self::generateVersionsClass($rootPackage->getName(), $versions);
        self::writeVersionClassToFile($versionClass, $composer, $composerEvent->getIO());
    }
    /**
     * @param string[] $versions
     */
    private static function generateVersionsClass(string $rootPackageName, array $versions) : string
    {
        return \sprintf(
            self::$generatedClassTemplate,
            'fin' . 'al ' . 'cla' . 'ss ' . 'Versions',
            // note: workaround for regex-based code parsers :-(
            $rootPackageName,
            \var_export($versions, \true)
        );
    }
    /**
     * @throws RuntimeException
     */
    private static function writeVersionClassToFile(string $versionClassSource, \_PhpScoper326af2119eba\Composer\Composer $composer, \_PhpScoper326af2119eba\Composer\IO\IOInterface $io)
    {
        $installPath = self::locateRootPackageInstallPath($composer->getConfig(), $composer->getPackage()) . '/src/PackageVersions/Versions.php';
        $installDir = \dirname($installPath);
        if (!\file_exists($installDir)) {
            $io->write('<info>composer/package-versions-deprecated:</info> Package not found (probably scheduled for removal); generation of version class skipped.');
            return;
        }
        if (!\is_writable($installDir)) {
            $io->write(\sprintf('<info>composer/package-versions-deprecated:</info> %s is not writable; generation of version class skipped.', $installDir));
            return;
        }
        $io->write('<info>composer/package-versions-deprecated:</info> Generating version class...');
        $installPathTmp = $installPath . '_' . \uniqid('tmp', \true);
        \file_put_contents($installPathTmp, $versionClassSource);
        \chmod($installPathTmp, 0664);
        \rename($installPathTmp, $installPath);
        $io->write('<info>composer/package-versions-deprecated:</info> ...done generating version class');
    }
    /**
     * @throws RuntimeException
     */
    private static function locateRootPackageInstallPath(\_PhpScoper326af2119eba\Composer\Config $composerConfig, \_PhpScoper326af2119eba\Composer\Package\RootPackageInterface $rootPackage) : string
    {
        if (self::getRootPackageAlias($rootPackage)->getName() === 'composer/package-versions-deprecated') {
            return \dirname($composerConfig->get('vendor-dir'));
        }
        return $composerConfig->get('vendor-dir') . '/composer/package-versions-deprecated';
    }
    private static function getRootPackageAlias(\_PhpScoper326af2119eba\Composer\Package\RootPackageInterface $rootPackage) : \_PhpScoper326af2119eba\Composer\Package\PackageInterface
    {
        $package = $rootPackage;
        while ($package instanceof \_PhpScoper326af2119eba\Composer\Package\AliasPackage) {
            $package = $package->getAliasOf();
        }
        return $package;
    }
    /**
     * @return Generator&string[]
     *
     * @psalm-return Generator<string, string>
     */
    private static function getVersions(\_PhpScoper326af2119eba\Composer\Package\Locker $locker, \_PhpScoper326af2119eba\Composer\Package\RootPackageInterface $rootPackage) : \Generator
    {
        $lockData = $locker->getLockData();
        $lockData['packages-dev'] = $lockData['packages-dev'] ?? [];
        $packages = $lockData['packages'];
        if (\getenv('COMPOSER_DEV_MODE') !== '0') {
            $packages = \array_merge($packages, $lockData['packages-dev']);
        }
        foreach ($packages as $package) {
            (yield $package['name'] => $package['version'] . '@' . ($package['source']['reference'] ?? $package['dist']['reference'] ?? ''));
        }
        foreach ($rootPackage->getReplaces() as $replace) {
            $version = $replace->getPrettyConstraint();
            if ($version === 'self.version') {
                $version = $rootPackage->getPrettyVersion();
            }
            (yield $replace->getTarget() => $version . '@' . $rootPackage->getSourceReference());
        }
        (yield $rootPackage->getName() => $rootPackage->getPrettyVersion() . '@' . $rootPackage->getSourceReference());
    }
}
