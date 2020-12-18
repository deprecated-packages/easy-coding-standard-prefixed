<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b;

use _PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
