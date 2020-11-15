<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee;

use _PhpScoper49c742f5a4ee\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper49c742f5a4ee\Psr\SimpleCache\CacheInterface;
use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper49c742f5a4ee\Psr\SimpleCache\CacheInterface::class, \_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper49c742f5a4ee\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
