<?php

declare (strict_types=1);
namespace _PhpScoper2dcc760f8ff8;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(ClassDefinitionFixer::class);
};
