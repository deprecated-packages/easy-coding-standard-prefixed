<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d;

use _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
