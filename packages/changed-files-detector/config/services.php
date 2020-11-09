<?php

declare (strict_types=1);
namespace _PhpScoperf5f75c22067b;

use _PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
