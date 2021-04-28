<?php

declare (strict_types=1);
namespace _PhpScoper1b2f8b9c0339;

use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
