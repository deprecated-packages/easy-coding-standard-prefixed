<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1;

use _PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperaba240c3d5f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
