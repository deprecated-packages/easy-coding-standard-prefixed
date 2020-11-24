<?php

declare (strict_types=1);
namespace _PhpScoperf3d5f0921050;

use _PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperf3d5f0921050\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
