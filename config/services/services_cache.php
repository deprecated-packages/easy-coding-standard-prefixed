<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d;

use _PhpScopercae980ebf12d\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercae980ebf12d\Psr\SimpleCache\CacheInterface;
use _PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercae980ebf12d\Symfony\Component\Cache\Psr16Cache;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopercae980ebf12d\Psr\SimpleCache\CacheInterface::class, \_PhpScopercae980ebf12d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopercae980ebf12d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
