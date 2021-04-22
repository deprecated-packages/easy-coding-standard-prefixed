<?php

declare (strict_types=1);
namespace _PhpScoper22e359cd1ab0;

use _PhpScoper22e359cd1ab0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-1');
};
