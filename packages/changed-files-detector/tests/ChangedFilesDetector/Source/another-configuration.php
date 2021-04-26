<?php

declare (strict_types=1);
namespace _PhpScoper4c15c250a340;

use _PhpScoper4c15c250a340\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
