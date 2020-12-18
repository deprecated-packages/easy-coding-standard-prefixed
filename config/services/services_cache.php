<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d;

use _PhpScoperd8b12759ee0d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd8b12759ee0d\Psr\SimpleCache\CacheInterface;
use _PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd8b12759ee0d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd8b12759ee0d\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd8b12759ee0d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd8b12759ee0d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
