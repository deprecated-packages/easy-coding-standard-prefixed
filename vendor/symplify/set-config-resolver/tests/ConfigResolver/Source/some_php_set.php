<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
