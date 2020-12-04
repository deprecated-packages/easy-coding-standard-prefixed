<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06;

use _PhpScopera04bf8e97c06\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera04bf8e97c06\Psr\SimpleCache\CacheInterface;
use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera04bf8e97c06\Psr\SimpleCache\CacheInterface::class, \_PhpScopera04bf8e97c06\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera04bf8e97c06\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
