<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c;

use _PhpScoper5ca2d8bcb02c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5ca2d8bcb02c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
