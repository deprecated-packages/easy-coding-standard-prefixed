<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8;

use _PhpScoper239b374a39c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper239b374a39c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
