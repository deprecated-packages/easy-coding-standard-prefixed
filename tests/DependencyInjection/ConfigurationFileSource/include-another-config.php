<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
