<?php

declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c;

use _PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\EasyTesting\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/DataProvider', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
};
