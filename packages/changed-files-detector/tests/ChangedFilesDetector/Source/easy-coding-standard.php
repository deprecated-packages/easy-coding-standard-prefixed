<?php

declare (strict_types=1);
namespace _PhpScoper890197fe38f7;

use _PhpScoper890197fe38f7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-1');
};
