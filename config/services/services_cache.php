<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c;

use _PhpScopera8f555a7493c\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera8f555a7493c\Psr\SimpleCache\CacheInterface;
use _PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera8f555a7493c\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera8f555a7493c\Psr\SimpleCache\CacheInterface::class, \_PhpScopera8f555a7493c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera8f555a7493c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
