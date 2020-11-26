<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736;

use _PhpScopercb217fd4e736\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercb217fd4e736\Psr\SimpleCache\CacheInterface;
use _PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercb217fd4e736\Symfony\Component\Cache\Psr16Cache;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopercb217fd4e736\Psr\SimpleCache\CacheInterface::class, \_PhpScopercb217fd4e736\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopercb217fd4e736\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
