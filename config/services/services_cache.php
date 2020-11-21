<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d;

use _PhpScopera4be459e5e3d\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera4be459e5e3d\Psr\SimpleCache\CacheInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera4be459e5e3d\Psr\SimpleCache\CacheInterface::class, \_PhpScopera4be459e5e3d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera4be459e5e3d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
