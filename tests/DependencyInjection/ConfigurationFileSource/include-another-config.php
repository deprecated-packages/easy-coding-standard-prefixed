<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
