<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc;

use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\Configuration\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception']);
};
