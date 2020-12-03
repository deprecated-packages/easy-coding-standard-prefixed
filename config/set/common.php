<?php

declare (strict_types=1);
namespace _PhpScoper5465fda93cc7;

use _PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
