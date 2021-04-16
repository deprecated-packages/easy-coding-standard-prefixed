<?php

declare (strict_types=1);
namespace _PhpScoper1ddca3f92d7d;

use _PhpScoper1ddca3f92d7d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
