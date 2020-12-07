<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
