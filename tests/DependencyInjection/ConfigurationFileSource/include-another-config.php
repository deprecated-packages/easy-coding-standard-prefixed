<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
