<?php

declare (strict_types=1);
namespace _PhpScoper653866602a9e;

use _PhpScoper653866602a9e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
