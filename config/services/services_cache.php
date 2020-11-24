<?php

declare (strict_types=1);
namespace _PhpScoper7108c819f5c5;

use _PhpScoper7108c819f5c5\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper7108c819f5c5\Psr\SimpleCache\CacheInterface;
use _PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper7108c819f5c5\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper7108c819f5c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7108c819f5c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper7108c819f5c5\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper7108c819f5c5\Psr\SimpleCache\CacheInterface::class, \_PhpScoper7108c819f5c5\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper7108c819f5c5\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper7108c819f5c5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
