<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59;

use _PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
