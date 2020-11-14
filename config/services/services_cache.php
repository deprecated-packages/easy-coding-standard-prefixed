<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f;

use _PhpScoper229e8121cf9f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper229e8121cf9f\Psr\SimpleCache\CacheInterface;
use _PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper229e8121cf9f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper229e8121cf9f\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper229e8121cf9f\Psr\SimpleCache\CacheInterface::class, \_PhpScoper229e8121cf9f\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper229e8121cf9f\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper229e8121cf9f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
