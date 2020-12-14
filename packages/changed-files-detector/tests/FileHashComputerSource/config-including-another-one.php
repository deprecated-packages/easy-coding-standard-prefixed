<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
