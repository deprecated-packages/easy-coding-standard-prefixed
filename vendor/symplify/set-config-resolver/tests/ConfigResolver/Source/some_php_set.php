<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe;

use _PhpScoper3e8786a75afe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3e8786a75afe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
