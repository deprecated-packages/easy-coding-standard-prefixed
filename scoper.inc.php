<?php

declare (strict_types=1);
namespace _PhpScoper133be48300f9;

require_once __DIR__ . '/vendor/autoload.php';
use _PhpScoper133be48300f9\Nette\Utils\Strings;
//$excludedClasses = [
//    // part of public API in config
//    ContainerConfigurator::class,
//];
return [
    'prefix' => null,
    'finders' => [],
    //    'patchers' => [
    //        // unprefix excluded classes
    //        // fixes https://github.com/humbug/box/issues/470
    //        function (string $filePath, string $prefix, string $content) use ($excludedClasses): string {
    //            foreach ($excludedClasses as $excludedClass) {
    //                $prefixedClassPattern = '#' . $prefix . '\\\\' . preg_quote($excludedClass, '#') . '#';
    //                $content = Strings::replace($content, $prefixedClassPattern, $excludedClass);
    //            }
    //
    //            return $content;
    //        },
    //    ],
    'whitelist' => [
        // needed for autoload, that is not prefixed, since it's in bin/* file
        'Symplify\\*',
        'PhpCsFixer\\*',
        'PHP_CodeSniffer\\*',
        'SlevomatCodingStandard\\*',
        '_PhpScoper133be48300f9\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
        'Composer\\*',
    ],
];
// notes from compiler commands
// remove this file, breaks stuff
// __DIR__ . '/../../../vendor/friendsofphp/php-cs-fixer/src/Test/AbstractIntegrationTestCase.php',
