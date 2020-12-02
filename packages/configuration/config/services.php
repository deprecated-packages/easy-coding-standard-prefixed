<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565;

use _PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\Configuration\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception']);
};
