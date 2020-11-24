<?php

declare (strict_types=1);
namespace _PhpScoper7c0f822a05e1;

use _PhpScoper7c0f822a05e1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7c0f822a05e1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
