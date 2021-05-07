<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(ClassDefinitionFixer::class);
};
