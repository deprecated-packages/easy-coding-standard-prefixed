<?php

declare (strict_types=1);
namespace _PhpScoper2d11f18408ea;

use _PhpScoper2d11f18408ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
