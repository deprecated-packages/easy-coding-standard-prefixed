<?php

declare (strict_types=1);
namespace _PhpScoper356bfb655d08;

use _PhpScoper356bfb655d08\Nette\Utils\Strings;
use _PhpScoper356bfb655d08\Isolated\Symfony\Component\Finder\Finder;
$polyfillFilesFinder = (new \_PhpScoper356bfb655d08\Isolated\Symfony\Component\Finder\Finder())->files()->in(__DIR__ . '/vendor/symfony/polyfill-*')->name('*.php');
$polyfillFilePaths = [];
foreach ($polyfillFilesFinder->getIterator() as $fileInfo) {
    $polyfillFilePaths[] = $fileInfo->getPathname();
}
return ['files-whitelist' => [
    // do not prefix "trigger_deprecation" from symfony - https://github.com/symfony/symfony/commit/0032b2a2893d3be592d4312b7b098fb9d71aca03
    // these paths are relative to this file location, so it should be in the root directory
    'vendor/symfony/deprecation-contracts/function.php',
    // for package versions - https://github.com/symplify/easy-coding-standard-prefixed/runs/2176047833
    '_PhpScoper356bfb655d08\\Composer\\InstalledVersions',
] + $polyfillFilePaths, 'whitelist' => [
    // needed for autoload, that is not prefixed, since it's in bin/* file
    'Symplify\\*',
    'PhpCsFixer\\*',
    'PHP_CodeSniffer\\*',
    'SlevomatCodingStandard\\*',
    '_PhpScoper356bfb655d08\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
    '_PhpScoper356bfb655d08\\Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
    'Symfony\\Polyfill\\*',
], 'patchers' => [function (string $filePath, string $prefix, string $content) : string {
    if (!\_PhpScoper356bfb655d08\Nette\Utils\Strings::endsWith($filePath, 'vendor/jean85/pretty-package-versions/src/PrettyVersions.php')) {
        return $content;
    }
    // see https://regex101.com/r/v8zRMm/1
    return \_PhpScoper356bfb655d08\Nette\Utils\Strings::replace($content, '#' . $prefix . '\\\\Composer\\\\InstalledVersions#', '_PhpScoper356bfb655d08\\Composer\\InstalledVersions');
}]];
