<?php

declare (strict_types=1);
namespace _PhpScoper70e3784a2d21;

use _PhpScoper70e3784a2d21\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper70e3784a2d21\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
