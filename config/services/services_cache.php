<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34;

use _PhpScoperfaaf57618f34\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfaaf57618f34\Psr\SimpleCache\CacheInterface;
use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfaaf57618f34\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfaaf57618f34\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfaaf57618f34\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
