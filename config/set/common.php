<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c;

use _PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
