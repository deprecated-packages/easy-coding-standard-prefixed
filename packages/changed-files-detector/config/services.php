<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b;

use _PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper4d3fa30a680b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
