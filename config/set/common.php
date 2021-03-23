<?php

declare (strict_types=1);
namespace _PhpScoper28625551a513;

use _PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
