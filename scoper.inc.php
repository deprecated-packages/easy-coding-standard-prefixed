<?php

declare (strict_types=1);
namespace _PhpScoperd47a2fa2a77e;

use _PhpScoperd47a2fa2a77e\Nette\Utils\Strings;
use _PhpScoperd47a2fa2a77e\Isolated\Symfony\Component\Finder\Finder;
$symfonyPolyfillPhpFilesFinder = \_PhpScoperd47a2fa2a77e\Isolated\Symfony\Component\Finder\Finder::create();
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
    '_PhpScoperd47a2fa2a77e\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
    '_PhpScoperd47a2fa2a77e\\Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
    'Symfony\\Polyfill\\*',
], 'patchers' => [function (string $filePath, string $prefix, string $content) : string {
    if (!\_PhpScoperd47a2fa2a77e\Nette\Utils\Strings::endsWith($filePath, 'vendor/jean85/pretty-package-versions/src/PrettyVersions.php')) {
        return $content;
    }
    // see https://regex101.com/r/v8zRMm/1
    return \_PhpScoperd47a2fa2a77e\Nette\Utils\Strings::replace($content, '#' . $prefix . '\\\\Composer\\\\InstalledVersions#', '_PhpScoperd47a2fa2a77e\\Composer\\InstalledVersions');
}]];
