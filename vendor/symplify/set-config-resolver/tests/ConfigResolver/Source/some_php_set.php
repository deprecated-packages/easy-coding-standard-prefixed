<?php

declare (strict_types=1);
namespace _PhpScopera46128941588;

use _PhpScopera46128941588\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
