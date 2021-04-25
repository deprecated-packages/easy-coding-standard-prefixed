<?php

declare (strict_types=1);
namespace _PhpScoperd232d3743ab9;

use _PhpScoperd232d3743ab9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-1');
};
