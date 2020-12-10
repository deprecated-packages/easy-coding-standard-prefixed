<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d;

use _PhpScopera1a51450b61d\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera1a51450b61d\Psr\SimpleCache\CacheInterface;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera1a51450b61d\Psr\SimpleCache\CacheInterface::class, \_PhpScopera1a51450b61d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera1a51450b61d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
