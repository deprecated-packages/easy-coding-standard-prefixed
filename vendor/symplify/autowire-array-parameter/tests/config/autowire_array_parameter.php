<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c;

use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\AutowireArrayParameter\\Tests\\Source\\', __DIR__ . '/../Source');
};
