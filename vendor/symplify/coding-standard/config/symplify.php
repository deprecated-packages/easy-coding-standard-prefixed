<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/config.php');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer::class);
    $services->load('Symplify\\CodingStandard\\Fixer\\', __DIR__ . '/../src/Fixer')->exclude([__DIR__ . '/../src/Fixer/Annotation']);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true)->property('allowFallbackGlobalFunctions', \true)->property('allowFallbackGlobalConstants', \true)->property('allowPartialUses', \false);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer::class);
};
