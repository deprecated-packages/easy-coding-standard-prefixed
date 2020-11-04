<?php

declare (strict_types=1);
namespace _PhpScoper48b5ec5b60cf;

use _PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
