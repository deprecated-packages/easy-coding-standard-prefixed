<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/config.php');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer::class);
    $services->load('Symplify\\CodingStandard\\Fixer\\', __DIR__ . '/../src/Fixer')->exclude([__DIR__ . '/../src/Fixer/Annotation']);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer::class);
};
