<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
