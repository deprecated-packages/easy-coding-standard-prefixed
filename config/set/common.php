<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5;

use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
