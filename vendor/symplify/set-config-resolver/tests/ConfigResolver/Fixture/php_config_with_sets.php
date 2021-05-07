<?php

declare (strict_types=1);
namespace _PhpScoper2dcc760f8ff8;

use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
