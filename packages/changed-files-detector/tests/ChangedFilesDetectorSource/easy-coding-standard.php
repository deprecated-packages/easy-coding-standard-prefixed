<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0;

use _PhpScoper78af57a363a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper78af57a363a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-1');
};
