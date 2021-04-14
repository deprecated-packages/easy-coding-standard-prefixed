<?php

declare (strict_types=1);
namespace _PhpScoperd32e35cfad84;

use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SnippetFormatter\\', __DIR__ . '/../src');
};
