<?php

declare (strict_types=1);
namespace _PhpScoper02b5d1bf8fec;

use _PhpScoper02b5d1bf8fec\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper02b5d1bf8fec\Psr\SimpleCache\CacheInterface;
use _PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper02b5d1bf8fec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper02b5d1bf8fec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper02b5d1bf8fec\Psr\SimpleCache\CacheInterface::class, \_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper02b5d1bf8fec\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
