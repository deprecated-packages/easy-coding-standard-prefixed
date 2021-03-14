<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6;

use _PhpScopere050faf861e6\Psr\Cache\CacheItemPoolInterface;
use _PhpScopere050faf861e6\Psr\SimpleCache\CacheInterface;
use _PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopere050faf861e6\Symfony\Component\Cache\Psr16Cache;
use _PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopere050faf861e6\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopere050faf861e6\Psr\SimpleCache\CacheInterface::class, \_PhpScopere050faf861e6\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopere050faf861e6\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
