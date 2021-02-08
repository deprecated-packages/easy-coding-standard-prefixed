<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c;

use _PhpScoper7faa8deb0d3c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7faa8deb0d3c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
