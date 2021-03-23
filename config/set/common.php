<?php

declare (strict_types=1);
namespace _PhpScoper4aefa5ecccc4;

use _PhpScoper4aefa5ecccc4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4aefa5ecccc4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
