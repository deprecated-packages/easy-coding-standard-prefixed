<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515;

use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
