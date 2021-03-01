<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use _PhpScoperc4ea0f0bd23f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc4ea0f0bd23f\Psr\SimpleCache\CacheInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc4ea0f0bd23f\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc4ea0f0bd23f\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
