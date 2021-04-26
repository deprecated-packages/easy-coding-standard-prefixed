<?php

declare (strict_types=1);
namespace _PhpScoper0261263ca84f;

use _PhpScoper0261263ca84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
