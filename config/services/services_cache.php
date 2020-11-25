<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperdc8fbcd7c69d\Psr\SimpleCache\CacheInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperdc8fbcd7c69d\Psr\SimpleCache\CacheInterface::class, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperdc8fbcd7c69d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
