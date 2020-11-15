<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad;

use _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
