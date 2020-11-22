<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
