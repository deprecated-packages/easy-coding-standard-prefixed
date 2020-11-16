<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db;

use _PhpScoperedc2e0c967db\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperedc2e0c967db\Psr\SimpleCache\CacheInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperedc2e0c967db\Psr\SimpleCache\CacheInterface::class, \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperedc2e0c967db\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
