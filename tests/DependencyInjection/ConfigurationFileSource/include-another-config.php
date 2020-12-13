<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
};
