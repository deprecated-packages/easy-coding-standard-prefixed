<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55;

use _PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
