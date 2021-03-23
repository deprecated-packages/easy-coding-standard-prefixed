<?php

declare (strict_types=1);
namespace _PhpScoper6ae4c4f86624;

use _PhpScoper6ae4c4f86624\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6ae4c4f86624\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
