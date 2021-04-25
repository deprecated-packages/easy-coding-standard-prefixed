<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4;

use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/simple-config.php');
    $services = $containerConfigurator->services();
    $services->set(ClassDefinitionFixer::class);
};
