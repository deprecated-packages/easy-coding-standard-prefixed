<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af;

use _PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
