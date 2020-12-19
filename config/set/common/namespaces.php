<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer;
use SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff;
use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
};
