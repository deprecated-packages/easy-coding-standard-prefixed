<?php

declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c;

use _PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SnippetFormatter\\', __DIR__ . '/../src');
};
