<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3;

use _PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
