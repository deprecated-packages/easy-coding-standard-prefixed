<?php

declare (strict_types=1);
namespace _PhpScoperc5e9eb67638f;

use _PhpScoperc5e9eb67638f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
