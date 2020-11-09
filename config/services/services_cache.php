<?php

declare (strict_types=1);
namespace _PhpScopere015d8a3273c;

use _PhpScopere015d8a3273c\Psr\Cache\CacheItemPoolInterface;
use _PhpScopere015d8a3273c\Psr\SimpleCache\CacheInterface;
use _PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopere015d8a3273c\Symfony\Component\Cache\Psr16Cache;
use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopere015d8a3273c\Psr\SimpleCache\CacheInterface::class, \_PhpScopere015d8a3273c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopere015d8a3273c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
