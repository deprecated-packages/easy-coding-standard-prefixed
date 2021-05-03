<?php

declare (strict_types=1);
namespace _PhpScopere72a8aaba560;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScopere72a8aaba560\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(ClassDefinitionFixer::class);
};
