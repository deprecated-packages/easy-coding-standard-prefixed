<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99;

use _PhpScoperfab1bfb7ec99\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfab1bfb7ec99\Psr\SimpleCache\CacheInterface;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfab1bfb7ec99\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfab1bfb7ec99\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
