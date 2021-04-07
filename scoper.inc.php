<?php

declare (strict_types=1);
namespace _PhpScoper57c79939064b;

use _PhpScoper57c79939064b\Nette\Utils\Strings;
use _PhpScoper57c79939064b\Isolated\Symfony\Component\Finder\Finder;
$finder = new \_PhpScoper57c79939064b\Isolated\Symfony\Component\Finder\Finder();
$polyfillFileInfos = $finder->files()->in(__DIR__ . '/vendor/symfony/polyfill-*')->name('*.php')->getIterator();
$polyfillFilePaths = [];
foreach ($polyfillFileInfos as $polyfillFileInfo) {
    $polyfillFilePaths[] = $polyfillFileInfo->getPathname();
}
return ['files-whitelist' => [
    // do not prefix "trigger_deprecation" from symfony - https://github.com/symfony/symfony/commit/0032b2a2893d3be592d4312b7b098fb9d71aca03
    // these paths are relative to this file location, so it should be in the root directory
    'vendor/symfony/deprecation-contracts/function.php',
] + $polyfillFilePaths, 'whitelist' => [
    // needed for autoload, that is not prefixed, since it's in bin/* file
    'Symplify\\*',
    'PhpCsFixer\\*',
    'PHP_CodeSniffer\\*',
    'SlevomatCodingStandard\\*',
    '_PhpScoper57c79939064b\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
    '_PhpScoper57c79939064b\\Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
    '_PhpScoper57c79939064b\\Composer\\InstalledVersions',
    'Symfony\\Polyfill\\*',
], 'patchers' => [function (string $filePath, string $prefix, string $content) : string {
    if (!\_PhpScoper57c79939064b\Nette\Utils\Strings::endsWith($filePath, 'vendor/jean85/pretty-package-versions/src/PrettyVersions.php')) {
        return $content;
    }
    // see https://regex101.com/r/v8zRMm/1
    return \_PhpScoper57c79939064b\Nette\Utils\Strings::replace($content, '#' . $prefix . '\\\\Composer\\\\InstalledVersions#', '_PhpScoper57c79939064b\\Composer\\InstalledVersions');
}]];
