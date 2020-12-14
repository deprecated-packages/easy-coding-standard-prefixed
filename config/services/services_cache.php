<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use _PhpScoperc64a4ac1af35\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc64a4ac1af35\Psr\SimpleCache\CacheInterface;
use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc64a4ac1af35\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc64a4ac1af35\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
