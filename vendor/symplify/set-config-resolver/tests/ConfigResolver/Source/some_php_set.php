<?php

declare (strict_types=1);
namespace _PhpScoper8b3c9ad56565;

use _PhpScoper8b3c9ad56565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
