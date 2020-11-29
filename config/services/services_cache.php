<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad;

use _PhpScoper9d73a84b09ad\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper9d73a84b09ad\Psr\SimpleCache\CacheInterface;
use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper9d73a84b09ad\Psr\SimpleCache\CacheInterface::class, \_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper9d73a84b09ad\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
