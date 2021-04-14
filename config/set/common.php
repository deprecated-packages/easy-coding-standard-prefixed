<?php

declare (strict_types=1);
namespace _PhpScoperd8b0b9452568;

use _PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
