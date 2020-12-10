<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb;

use _PhpScoper58a0a169dcfb\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper58a0a169dcfb\Psr\SimpleCache\CacheInterface;
use _PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper58a0a169dcfb\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper58a0a169dcfb\Psr\SimpleCache\CacheInterface::class, \_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper58a0a169dcfb\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper58a0a169dcfb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
