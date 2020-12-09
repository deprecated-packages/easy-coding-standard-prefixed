<?php

declare (strict_types=1);
namespace _PhpScoper9b9ddfd01528;

use _PhpScoper9b9ddfd01528\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9b9ddfd01528\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
