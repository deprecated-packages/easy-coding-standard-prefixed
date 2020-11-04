<?php

declare (strict_types=1);
namespace _PhpScoper48b5ec5b60cf;

use _PhpScoper48b5ec5b60cf\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper48b5ec5b60cf\Psr\SimpleCache\CacheInterface;
use _PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper48b5ec5b60cf\Psr\SimpleCache\CacheInterface::class, \_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper48b5ec5b60cf\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
