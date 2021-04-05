<?php

declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d;

use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
