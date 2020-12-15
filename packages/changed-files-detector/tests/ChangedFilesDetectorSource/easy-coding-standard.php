<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972;

use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-1');
};
