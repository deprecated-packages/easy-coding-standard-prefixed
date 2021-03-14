<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5;

use _PhpScoperfb0714773dc5\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfb0714773dc5\Psr\SimpleCache\CacheInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfb0714773dc5\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfb0714773dc5\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
