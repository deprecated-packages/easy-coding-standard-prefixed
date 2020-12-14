<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SnippetFormatter\\', __DIR__ . '/../src');
};
