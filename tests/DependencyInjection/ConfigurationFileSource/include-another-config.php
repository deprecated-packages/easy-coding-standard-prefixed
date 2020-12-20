<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
