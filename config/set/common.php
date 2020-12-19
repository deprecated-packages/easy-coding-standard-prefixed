<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b;

use _PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
