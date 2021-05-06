<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(ClassDefinitionFixer::class);
};
