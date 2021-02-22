<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df;

use _PhpScoperfcee700af3df\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfcee700af3df\Psr\SimpleCache\CacheInterface;
use _PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfcee700af3df\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfcee700af3df\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfcee700af3df\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfcee700af3df\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
