<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PackageVersions;

use OutOfBoundsException;
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'symplify/easy-coding-standard';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47', 'composer/semver' => '1.4.0@84c47f3d8901440403217afc120683c7385aecb8', 'composer/xdebug-handler' => '1.4.0@cbe23383749496fe0f373345208b79568e4bc248', 'dealerdirect/phpcodesniffer-composer-installer' => 'v0.7.0@e8d808670b8f882188368faaf1144448c169c0b7', 'doctrine/annotations' => 'v1.2.0@d9b1a37e9351ddde1f19f09a02e3d6ee92e82efd', 'doctrine/lexer' => 'v1.0@2f708a85bb3aab5d99dab8be435abd73e0b18acb', 'friendsofphp/php-cs-fixer' => 'v2.16.0@ceaff36bee1ed3f1bbbedca36d2528c0826c336d', 'jean85/pretty-package-versions' => '1.5.0@e9f4324e88b8664be386d90cf60fbc202e1f7fc9', 'nette/finder' => 'v2.5.0@6be1b83ea68ac558aff189d640abe242e0306fe2', 'nette/neon' => 'v3.2.0@72dd80316595d4b5c5312ea4e9beb53f3ba823d7', 'nette/robot-loader' => 'v3.2.0@0712a0e39ae7956d6a94c0ab6ad41aa842544b5c', 'nette/utils' => 'v3.0.0@ec1e4055c295d73bb9e8ce27be859f434a6f6806', 'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de', 'paragonie/random_compat' => 'v1.0.0@a1d9f267eb8b8ad560e54e397a5ed1e3b78097d1', 'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756', 'phpstan/phpdoc-parser' => '0.4.5@956e7215c7c740d1226e7c03677140063918ec7d', 'psr/cache' => '1.0.0@9e66031f41fbbdda45ee11e93c45d480ccba3eb3', 'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f', 'psr/log' => '1.0.0@fe0936ee26643249e916849d48e3a51d5f5e278b', 'psr/simple-cache' => '1.0.0@753fa598e8f3b9966c886fe13f370baa45ef0e24', 'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29', 'slevomat/coding-standard' => '6.4.0@bf3a16a630d8245c350b459832a71afa55c02fd3', 'squizlabs/php_codesniffer' => '3.5.6@e97627871a7eab2f70e59166072a6b767d5834e0', 'symfony/cache' => 'v4.4.0@72d5cdc6920f889290beb65fa96b5e9d4515e382', 'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1', 'symfony/config' => 'v4.4.0@f08e1c48e1f05d07c32f2d8599ed539e62105beb', 'symfony/console' => 'v4.4.0@35d9077f495c6d184d9930f7a7ecbd1ad13c7ab8', 'symfony/debug' => 'v4.4.0@b24b791f817116b29e52a63e8544884cf9a40757', 'symfony/dependency-injection' => 'v4.4.0@d4439814135ed1343c93bde998b7792af8852e41', 'symfony/error-handler' => 'v4.4.0@e1acb58dc6a8722617fe56565f742bcf7e8744bf', 'symfony/event-dispatcher' => 'v4.4.0@ab1c43e17fff802bef0a898f3bc088ac33b8e0e1', 'symfony/event-dispatcher-contracts' => 'v1.1.1@8fa2cf2177083dd59cf8e44ea4b6541764fbda69', 'symfony/filesystem' => 'v4.4.0@d12b01cba60be77b583c9af660007211e3909854', 'symfony/finder' => 'v4.4.0@ce8743441da64c41e2a667b8eb66070444ed911e', 'symfony/http-foundation' => 'v4.4.0@502040dd2b0cf0a292defeb6145f4d7a4753c99c', 'symfony/http-kernel' => 'v4.4.0@5a5e7237d928aa98ff8952050cbbf0135899b6b0', 'symfony/mime' => 'v4.3.0@0b166aee243364cd9de05755d2e9651876090abb', 'symfony/options-resolver' => 'v3.0.0@8e68c053a39e26559357cc742f01a7182ce40785', 'symfony/polyfill-ctype' => 'v1.8.0@7cc359f1b7b80fc25ed7796be7d96adc9b354bae', 'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117', 'symfony/polyfill-intl-normalizer' => 'v1.10.0@f8ed52909fc049b42a772c64ec1e6b31792abad6', 'symfony/polyfill-mbstring' => 'v1.1.0@1289d16209491b584839022f29257ad859b8532d', 'symfony/polyfill-php70' => 'v1.0.0@7f7f3c9c2b9f17722e0cd64fdb4f957330c53146', 'symfony/polyfill-php72' => 'v1.10.0@9050816e2ca34a8e916c3a0ae8b9c2fccf68b631', 'symfony/polyfill-php73' => 'v1.9.0@990ca8fa94736211d2b305178c3fb2527e1fbce1', 'symfony/process' => 'v3.3.0@8e30690c67aafb6c7992d6d8eb0d707807dd3eaf', 'symfony/service-contracts' => 'v1.1.6@ea7263d6b6d5f798b56a45a5b8d686725f2719a3', 'symfony/stopwatch' => 'v3.0.0@6aeac8907e3e1340a0033b0a9ec075f8e6524800', 'symfony/var-dumper' => 'v4.4.0@eade2890f8b0eeb279b6cf41b50a10007294490f', 'symfony/var-exporter' => 'v4.2.0@08250457428e06289d21ed52397b0ae336abf54b', 'symfony/yaml' => 'v4.4.0@76de473358fe802578a415d5bb43c296cf09d211', 'symplify/autowire-array-parameter' => 'dev-master@506e7ff399512f18f0e1953c7a00e52638d4e354', 'symplify/coding-standard' => 'dev-master@af6286ad44006d7d8845629cdd8cea169a4e3ff0', 'symplify/composer-json-manipulator' => 'dev-master@14142253a69ed5fa2fe65b509d9eff2a9ecf2ff1', 'symplify/console-color-diff' => 'dev-master@5f48703a225eec6cfaf251b6b58af372207f0284', 'symplify/easy-testing' => 'dev-master@170ee891547dde4d63bc29b00afa22884c6df25c', 'symplify/markdown-diff' => 'dev-master@1b9a0b3d68731936dccab0c8bd5bd115e7d833f6', 'symplify/package-builder' => 'dev-master@b57de196cd914ad695e95acce54dd9ae80c7dbbc', 'symplify/php-config-printer' => 'dev-master@79d557daabb9876358d08f4df306a621f6a0322b', 'symplify/rule-doc-generator' => 'dev-master@8b96fa960a79ceac0ad8ab713dbde96739a0eec9', 'symplify/set-config-resolver' => 'dev-master@a3d9f13248061bfe06b7255394c8e40502175203', 'symplify/skipper' => 'dev-master@4fd9d6828ed98092416525ac177c27ccb977998b', 'symplify/smart-file-system' => 'dev-master@abc529006989de756721cb1ec21a3791b7f1bd68', 'symplify/symplify-kernel' => 'dev-master@38dd5f0f89d7ad57f4674b7332659f4514ffcbd6', 'dflydev/markdown' => 'v1.0.0@76501a808522dbe40a5a71d272bd08d54cbae03d', 'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a', 'myclabs/deep-copy' => '1.9.1@e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72', 'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4', 'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6', 'phpdocumentor/reflection-docblock' => '2.0.0@66ae84e9d7c8ea85c979cb65977bd8e608baf0c5', 'phpspec/prophecy' => '1.8.1@1927e75f4ed19131ec9bcc3b002e07fb1173ee76', 'phpunit/php-code-coverage' => '7.0.7@7743bbcfff2a907e9ee4a25be13d0f8ec5e73800', 'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946', 'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686', 'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e', 'phpunit/php-token-stream' => '3.1.0@e899757bb3df5ff6e95089132f32cd59aac2220a', 'phpunit/phpunit' => '8.5.0@3ee1c1fd6fc264480c25b6fb8285edefe1702dab', 'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18', 'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da', 'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404', 'sebastian/exporter' => '3.1.1@06a9a5947f47b3029d76118eb5c22802e5869687', 'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4', 'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5', 'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be', 'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8', 'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9', 'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3', 'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019', 'symplify/easy-coding-standard-tester' => 'dev-master@224b26922a630fe70b67ae76803c5f847589ceac', 'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9', 'symplify/easy-coding-standard' => '9.0.x-dev@a84fce8a06b3ab356b0e54d2634fd86fb7fd3f8b');
    private function __construct()
    {
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
}
