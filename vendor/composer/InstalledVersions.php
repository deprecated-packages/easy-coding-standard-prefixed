<?php

namespace ECSPrefix20210507\Composer;

use ECSPrefix20210507\Composer\Autoload\ClassLoader;
use ECSPrefix20210507\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => NULL, 'name' => 'symplify/easy-coding-standard'), 'versions' => array('composer/package-versions-deprecated' => array('pretty_version' => '1.11.99.1', 'version' => '1.11.99.1', 'aliases' => array(), 'reference' => '7413f0b55a051e89485c5cb9f765fe24bb02a7b6'), 'composer/semver' => array('pretty_version' => '3.2.4', 'version' => '3.2.4.0', 'aliases' => array(), 'reference' => 'a02fdf930a3c1c3ed3a49b5f63859c0c20e10464'), 'composer/xdebug-handler' => array('pretty_version' => '2.0.1', 'version' => '2.0.1.0', 'aliases' => array(), 'reference' => '964adcdd3a28bf9ed5d9ac6450064e0d71ed7496'), 'doctrine/annotations' => array('pretty_version' => '1.12.1', 'version' => '1.12.1.0', 'aliases' => array(), 'reference' => 'b17c5014ef81d212ac539f07a1001832df1b6d3b'), 'doctrine/lexer' => array('pretty_version' => '1.2.1', 'version' => '1.2.1.0', 'aliases' => array(), 'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042'), 'friendsofphp/php-cs-fixer' => array('pretty_version' => 'v3.0.0', 'version' => '3.0.0.0', 'aliases' => array(), 'reference' => 'c15377bdfa8d1ecf186f1deadec39c89984e1167'), 'jean85/pretty-package-versions' => array('pretty_version' => '2.0.3', 'version' => '2.0.3.0', 'aliases' => array(), 'reference' => 'b2c4ec2033a0196317a467cb197c7c843b794ddf'), 'nette/neon' => array('pretty_version' => 'v3.2.2', 'version' => '3.2.2.0', 'aliases' => array(), 'reference' => 'e4ca6f4669121ca6876b1d048c612480e39a28d5'), 'nette/utils' => array('pretty_version' => 'v3.2.2', 'version' => '3.2.2.0', 'aliases' => array(), 'reference' => '967cfc4f9a1acd5f1058d76715a424c53343c20c'), 'ocramius/package-versions' => array('replaced' => array(0 => '1.11.99')), 'php-cs-fixer/diff' => array('pretty_version' => 'v2.0.2', 'version' => '2.0.2.0', 'aliases' => array(), 'reference' => '29dc0d507e838c4580d018bd8b5cb412474f7ec3'), 'psr/cache' => array('pretty_version' => '1.0.1', 'version' => '1.0.1.0', 'aliases' => array(), 'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8'), 'psr/cache-implementation' => array('provided' => array(0 => '1.0|2.0')), 'psr/container' => array('pretty_version' => '1.1.1', 'version' => '1.1.1.0', 'aliases' => array(), 'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf'), 'psr/container-implementation' => array('provided' => array(0 => '1.0')), 'psr/event-dispatcher' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0'), 'psr/event-dispatcher-implementation' => array('provided' => array(0 => '1.0')), 'psr/log' => array('pretty_version' => '1.1.4', 'version' => '1.1.4.0', 'aliases' => array(), 'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11'), 'psr/log-implementation' => array('provided' => array(0 => '1.0')), 'psr/simple-cache' => array('pretty_version' => '1.0.1', 'version' => '1.0.1.0', 'aliases' => array(), 'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b'), 'psr/simple-cache-implementation' => array('provided' => array(0 => '1.0')), 'sebastian/diff' => array('pretty_version' => '4.0.4', 'version' => '4.0.4.0', 'aliases' => array(), 'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d'), 'squizlabs/php_codesniffer' => array('pretty_version' => '3.6.0', 'version' => '3.6.0.0', 'aliases' => array(), 'reference' => 'ffced0d2c8fa8e6cdc4d695a743271fab6c38625'), 'symfony/cache' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '1d801d1dc5e3840e832568db6b35a954cfb435a8'), 'symfony/cache-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => 'c0446463729b89dd4fa62e9aeecc80287323615d'), 'symfony/cache-implementation' => array('provided' => array(0 => '1.0|2.0')), 'symfony/config' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '3817662ada105c8c4d1afdb4ec003003efd1d8d8'), 'symfony/console' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '90374b8ed059325b49a29b55b3f8bb4062c87629'), 'symfony/dependency-injection' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '6ca378b99e3c9ba6127eb43b68389fb2b7348577'), 'symfony/deprecation-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627'), 'symfony/error-handler' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => 'ea3ddbf67615e883ca7c33a4de61213789846782'), 'symfony/event-dispatcher' => array('pretty_version' => 'v5.2.4', 'version' => '5.2.4.0', 'aliases' => array(), 'reference' => 'd08d6ec121a425897951900ab692b612a61d6240'), 'symfony/event-dispatcher-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11'), 'symfony/event-dispatcher-implementation' => array('provided' => array(0 => '2.0')), 'symfony/filesystem' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '056e92acc21d977c37e6ea8e97374b2a6c8551b0'), 'symfony/finder' => array('pretty_version' => 'v5.2.4', 'version' => '5.2.4.0', 'aliases' => array(), 'reference' => '0d639a0943822626290d169965804f79400e6a04'), 'symfony/http-client-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4'), 'symfony/http-foundation' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => 'a416487a73bb9c9d120e9ba3a60547f4a3fb7a1f'), 'symfony/http-kernel' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '1e9f6879f070f718e0055fbac232a56f67b8b6bd'), 'symfony/options-resolver' => array('pretty_version' => 'v5.2.4', 'version' => '5.2.4.0', 'aliases' => array(), 'reference' => '5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce'), 'symfony/polyfill-ctype' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e'), 'symfony/polyfill-intl-grapheme' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => '5601e09b69f26c1828b13b6bb87cb07cddba3170'), 'symfony/polyfill-intl-normalizer' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248'), 'symfony/polyfill-mbstring' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1'), 'symfony/polyfill-php72' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9'), 'symfony/polyfill-php73' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2'), 'symfony/polyfill-php80' => array('pretty_version' => 'v1.22.1', 'version' => '1.22.1.0', 'aliases' => array(), 'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91'), 'symfony/process' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e'), 'symfony/service-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb'), 'symfony/service-implementation' => array('provided' => array(0 => '1.0|2.0')), 'symfony/stopwatch' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => 'd99310c33e833def36419c284f60e8027d359678'), 'symfony/string' => array('pretty_version' => 'v5.2.6', 'version' => '5.2.6.0', 'aliases' => array(), 'reference' => 'ad0bd91bce2054103f5eaa18ebeba8d3bc2a0572'), 'symfony/var-dumper' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '27cb9f7cfa3853c736425c7233a8f68814b19636'), 'symfony/var-exporter' => array('pretty_version' => 'v5.2.7', 'version' => '5.2.7.0', 'aliases' => array(), 'reference' => '01184a5ab95eb9500b9b0ef3e525979e003d9c81'), 'symplify/autowire-array-parameter' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '082531e1758f170dec639ec9cd5858f94bc208f6'), 'symplify/coding-standard' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '93bd0efc7dc3ec640c1d49b1bc34dec3df759ff6'), 'symplify/composer-json-manipulator' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => 'a58d9f73bb7f756b720428566761854a44d86641'), 'symplify/console-color-diff' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '1572b114d39499757fa2d7d46367fc41ba07e006'), 'symplify/console-package-builder' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '072420b8373cd28e617dbccd7abdef4e5a5a2871'), 'symplify/easy-coding-standard' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => NULL), 'symplify/easy-testing' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => 'd12b5b2772dc757b3b6141819fac9b71287095e4'), 'symplify/package-builder' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => 'be792b98451e1d6098dc76fcbcc64a664b597239'), 'symplify/rule-doc-generator-contracts' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => 'b661f9642938eb64d076c4eff25ad4ffc439ef8c'), 'symplify/set-config-resolver' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '01defc375e33a7a65f747165afe7ad695f92a0d0'), 'symplify/skipper' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '5db8993e3167f28b60516b17de50c937df17ba75'), 'symplify/smart-file-system' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '2dea618353e3da36cb4244b28f0ca41387d764f2'), 'symplify/symplify-kernel' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '9.4.x-dev'), 'reference' => '6ce79f29218bd8b90f70b6ed993c227b8d8bd57f')));
    private static $canGetVendors;
    private static $installedByVendor = array();
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = \array_keys($installed['versions']);
        }
        if (1 === \count($packages)) {
            return $packages[0];
        }
        return \array_keys(\array_flip(\call_user_func_array('array_merge', $packages)));
    }
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return \true;
            }
        }
        return \false;
    }
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));
        return $provided->matches($constraint);
    }
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (\array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (\array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (\array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }
            return \implode(' || ', $ranges);
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }
            return $installed['versions'][$packageName]['version'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }
            return $installed['versions'][$packageName]['pretty_version'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }
            return $installed['versions'][$packageName]['reference'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getRootPackage()
    {
        $installed = self::getInstalled();
        return $installed[0]['root'];
    }
    public static function getRawData()
    {
        return self::$installed;
    }
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = \method_exists('ECSPrefix20210507\\Composer\\Autoload\\ClassLoader', 'getRegisteredLoaders');
        }
        $installed = array();
        if (self::$canGetVendors) {
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (\is_file($vendorDir . '/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = (require $vendorDir . '/composer/installed.php');
                }
            }
        }
        $installed[] = self::$installed;
        return $installed;
    }
}
\class_alias('ECSPrefix20210507\\Composer\\InstalledVersions', 'Composer\\InstalledVersions', \false);
