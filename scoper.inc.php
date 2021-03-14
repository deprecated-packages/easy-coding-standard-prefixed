<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5;

use _PhpScoperfb0714773dc5\Isolated\Symfony\Component\Finder\Finder;
$symfonyPolyfillPhpFilesFinder = \_PhpScoperfb0714773dc5\Isolated\Symfony\Component\Finder\Finder::create();
$symfonyPolyfillPhpFilesFinder = $symfonyPolyfillPhpFilesFinder->files();
$symfonyPolyfillPhpFilesFinder = $symfonyPolyfillPhpFilesFinder->in(__DIR__ . '/vendor/symfony/polyfill-*');
$symfonyPolyfillPhpFilesFinder = $symfonyPolyfillPhpFilesFinder->name('*.php');
$symfonyPolyfillPhpFilesArray = \iterator_to_array($symfonyPolyfillPhpFilesFinder);
$symfonyPolyfillPhpFilenames = \array_values($symfonyPolyfillPhpFilesArray);
$symfonyPolyfillAllowlist = \array_map(static function ($file) {
    return $file->getPathName();
}, $symfonyPolyfillPhpFilenames);
return ['files-whitelist' => [
    // do not prefix "trigger_deprecation" from symfony - https://github.com/symfony/symfony/commit/0032b2a2893d3be592d4312b7b098fb9d71aca03
    // these paths are relative to this file location, so it should be in the root directory
    'vendor/symfony/deprecation-contracts/function.php',
] + $symfonyPolyfillAllowlist, 'whitelist' => [
    // needed for autoload, that is not prefixed, since it's in bin/* file
    'Symplify\\*',
    'PhpCsFixer\\*',
    'PHP_CodeSniffer\\*',
    'SlevomatCodingStandard\\*',
    '_PhpScoperfb0714773dc5\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
    '_PhpScoperfb0714773dc5\\Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
    'Symfony\\Polyfill\\*',
]];
