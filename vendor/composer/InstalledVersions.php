<?php

namespace _PhpScoper7faa8deb0d3c\Composer;

use _PhpScoper7faa8deb0d3c\Composer\Autoload\ClassLoader;
use _PhpScoper7faa8deb0d3c\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => NULL, 'name' => 'symplify/easy-coding-standard'), 'versions' => array('composer/package-versions-deprecated' => array('pretty_version' => '1.11.99.1', 'version' => '1.11.99.1', 'aliases' => array(), 'reference' => '7413f0b55a051e89485c5cb9f765fe24bb02a7b6'), 'composer/semver' => array('pretty_version' => '3.2.4', 'version' => '3.2.4.0', 'aliases' => array(), 'reference' => 'a02fdf930a3c1c3ed3a49b5f63859c0c20e10464'), 'composer/xdebug-handler' => array('pretty_version' => '1.4.5', 'version' => '1.4.5.0', 'aliases' => array(), 'reference' => 'f28d44c286812c714741478d968104c5e604a1d4'), 'doctrine/annotations' => array('pretty_version' => '1.11.1', 'version' => '1.11.1.0', 'aliases' => array(), 'reference' => 'ce77a7ba1770462cd705a91a151b6c3746f9c6ad'), 'doctrine/lexer' => array('pretty_version' => '1.2.1', 'version' => '1.2.1.0', 'aliases' => array(), 'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042'), 'friendsofphp/php-cs-fixer' => array('pretty_version' => 'v2.18.2', 'version' => '2.18.2.0', 'aliases' => array(), 'reference' => '18f8c9d184ba777380794a389fabc179896ba913'), 'jean85/pretty-package-versions' => array('pretty_version' => '1.6.0', 'version' => '1.6.0.0', 'aliases' => array(), 'reference' => '1e0104b46f045868f11942aea058cd7186d6c303'), 'nette/finder' => array('pretty_version' => 'v2.5.2', 'version' => '2.5.2.0', 'aliases' => array(), 'reference' => '4ad2c298eb8c687dd0e74ae84206a4186eeaed50'), 'nette/neon' => array('pretty_version' => 'v3.2.1', 'version' => '3.2.1.0', 'aliases' => array(), 'reference' => 'a5b3a60833d2ef55283a82d0c30b45d136b29e75'), 'nette/robot-loader' => array('pretty_version' => 'v3.3.1', 'version' => '3.3.1.0', 'aliases' => array(), 'reference' => '15c1ecd0e6e69e8d908dfc4cca7b14f3b850a96b'), 'nette/utils' => array('pretty_version' => 'v3.2.1', 'version' => '3.2.1.0', 'aliases' => array(), 'reference' => '2bc2f58079c920c2ecbb6935645abf6f2f5f94ba'), 'nikic/php-parser' => array('pretty_version' => 'v4.10.4', 'version' => '4.10.4.0', 'aliases' => array(), 'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e'), 'ocramius/package-versions' => array('replaced' => array(0 => '1.11.99')), 'php-cs-fixer/diff' => array('pretty_version' => 'v1.3.1', 'version' => '1.3.1.0', 'aliases' => array(), 'reference' => 'dbd31aeb251639ac0b9e7e29405c1441907f5759'), 'psr/cache' => array('pretty_version' => '1.0.1', 'version' => '1.0.1.0', 'aliases' => array(), 'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8'), 'psr/cache-implementation' => array('provided' => array(0 => '1.0')), 'psr/container' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f'), 'psr/container-implementation' => array('provided' => array(0 => '1.0')), 'psr/event-dispatcher' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0'), 'psr/event-dispatcher-implementation' => array('provided' => array(0 => '1.0')), 'psr/log' => array('pretty_version' => '1.1.3', 'version' => '1.1.3.0', 'aliases' => array(), 'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc'), 'psr/log-implementation' => array('provided' => array(0 => '1.0')), 'psr/simple-cache' => array('pretty_version' => '1.0.1', 'version' => '1.0.1.0', 'aliases' => array(), 'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b'), 'psr/simple-cache-implementation' => array('provided' => array(0 => '1.0')), 'sebastian/diff' => array('pretty_version' => '4.0.4', 'version' => '4.0.4.0', 'aliases' => array(), 'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d'), 'squizlabs/php_codesniffer' => array('pretty_version' => '3.5.8', 'version' => '3.5.8.0', 'aliases' => array(), 'reference' => '9d583721a7157ee997f235f327de038e7ea6dac4'), 'symfony/cache' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => 'd6aed6c1bbf6f59e521f46437475a0ff4878d388'), 'symfony/cache-contracts' => array('pretty_version' => 'v2.2.0', 'version' => '2.2.0.0', 'aliases' => array(), 'reference' => '8034ca0b61d4dd967f3698aaa1da2507b631d0cb'), 'symfony/cache-implementation' => array('provided' => array(0 => '1.0')), 'symfony/config' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '50e0e1314a3b2609d32b6a5a0d0fb5342494c4ab'), 'symfony/console' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '89d4b176d12a2946a1ae4e34906a025b7b6b135a'), 'symfony/dependency-injection' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '62f72187be689540385dce6c68a5d4c16f034139'), 'symfony/deprecation-contracts' => array('pretty_version' => 'v2.2.0', 'version' => '2.2.0.0', 'aliases' => array(), 'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665'), 'symfony/error-handler' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '48f18b3609e120ea66d59142c23dc53e9562c26d'), 'symfony/event-dispatcher' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '4f9760f8074978ad82e2ce854dff79a71fe45367'), 'symfony/event-dispatcher-contracts' => array('pretty_version' => 'v2.2.0', 'version' => '2.2.0.0', 'aliases' => array(), 'reference' => '0ba7d54483095a198fa51781bc608d17e84dffa2'), 'symfony/event-dispatcher-implementation' => array('provided' => array(0 => '2.0')), 'symfony/filesystem' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '262d033b57c73e8b59cd6e68a45c528318b15038'), 'symfony/finder' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '4adc8d172d602008c204c2e16956f99257248e03'), 'symfony/http-client-contracts' => array('pretty_version' => 'v2.3.1', 'version' => '2.3.1.0', 'aliases' => array(), 'reference' => '41db680a15018f9c1d4b23516059633ce280ca33'), 'symfony/http-foundation' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '20c554c0f03f7cde5ce230ed248470cccbc34c36'), 'symfony/http-kernel' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '89bac04f29e7b0b52f9fa6a4288ca7a8f90a1a05'), 'symfony/options-resolver' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce'), 'symfony/polyfill-ctype' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e'), 'symfony/polyfill-intl-grapheme' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => '267a9adeb8ecb8071040a740930e077cdfb987af'), 'symfony/polyfill-intl-normalizer' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => '6e971c891537eb617a00bb07a43d182a6915faba'), 'symfony/polyfill-mbstring' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => 'f377a3dd1fde44d37b9831d68dc8dea3ffd28e13'), 'symfony/polyfill-php70' => array('pretty_version' => 'v1.20.0', 'version' => '1.20.0.0', 'aliases' => array(), 'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644'), 'symfony/polyfill-php72' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9'), 'symfony/polyfill-php73' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2'), 'symfony/polyfill-php80' => array('pretty_version' => 'v1.22.0', 'version' => '1.22.0.0', 'aliases' => array(), 'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91'), 'symfony/process' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '313a38f09c77fbcdc1d223e57d368cea76a2fd2f'), 'symfony/service-contracts' => array('pretty_version' => 'v2.2.0', 'version' => '2.2.0.0', 'aliases' => array(), 'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1'), 'symfony/service-implementation' => array('provided' => array(0 => '1.0')), 'symfony/stopwatch' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => 'b12274acfab9d9850c52583d136a24398cdf1a0c'), 'symfony/string' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => 'c95468897f408dd0aca2ff582074423dd0455122'), 'symfony/var-dumper' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '72ca213014a92223a5d18651ce79ef441c12b694'), 'symfony/var-exporter' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '5aed4875ab514c8cb9b6ff4772baa25fa4c10307'), 'symfony/yaml' => array('pretty_version' => 'v5.2.3', 'version' => '5.2.3.0', 'aliases' => array(), 'reference' => '338cddc6d74929f6adf19ca5682ac4b8e109cdb0'), 'symplify/autowire-array-parameter' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '6cdd154b9282c2b4fd85220d391ecaf1456f012b'), 'symplify/coding-standard' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '478322b15cd2489a50c51b5806b1d47d54c36f9e'), 'symplify/composer-json-manipulator' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '91b391de811657d5d0629052fb6f1135750d726a'), 'symplify/console-color-diff' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '52761da8ad9cc03bb49f3bac2ce1edce093a4174'), 'symplify/console-package-builder' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'e98090a48e71df9b5145295426e5b04b2e611162'), 'symplify/easy-coding-standard' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => NULL), 'symplify/easy-testing' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'b798fa17ee4f3d93ca759ab01752f6ff765e8761'), 'symplify/markdown-diff' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '30151f42c4d15ad86d982c4fc890c5a7b84c1789'), 'symplify/package-builder' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '65430f9622c3246e359c25cd5c2710a9829e3309'), 'symplify/php-config-printer' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'ebbe0e5a331ffa4bb72d91e35582fb745794ea9f'), 'symplify/rule-doc-generator' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'e88d1c9cfc0b9d79b000bfea4085df4167db1db4'), 'symplify/set-config-resolver' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => '4a15804e9f7c813d5cd2e494166fc8078966e4ff'), 'symplify/skipper' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'd54ed0148fcbd689f03fd2203873c7a666e7335c'), 'symplify/smart-file-system' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'ef26a1e1c5cc56c6b0cfdc2eed2e0eab129ceea2'), 'symplify/symplify-kernel' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9.2.x-dev'), 'reference' => 'd6b8fbaf021c244b45479f098ad5fecac876ac02')));
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
    public static function satisfies(\_PhpScoper7faa8deb0d3c\Composer\Semver\VersionParser $parser, $packageName, $constraint)
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
            self::$canGetVendors = \method_exists('_PhpScoper7faa8deb0d3c\\Composer\\Autoload\\ClassLoader', 'getRegisteredLoaders');
        }
        $installed = array();
        if (self::$canGetVendors) {
            foreach (\_PhpScoper7faa8deb0d3c\Composer\Autoload\ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
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
