<?php

declare (strict_types=1);
namespace _PhpScoperae959d396e95;

use _PhpScoperae959d396e95\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperae959d396e95\Psr\SimpleCache\CacheInterface;
use _PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperae959d396e95\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperae959d396e95\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperae959d396e95\Psr\SimpleCache\CacheInterface::class, \_PhpScoperae959d396e95\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperae959d396e95\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
