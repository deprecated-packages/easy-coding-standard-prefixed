<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01;

use _PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
