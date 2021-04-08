<?php

declare (strict_types=1);
namespace _PhpScoper2f04ef4e8878;

use _PhpScoper2f04ef4e8878\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2f04ef4e8878\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
