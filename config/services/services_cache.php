<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd;

use _PhpScoper2a8ad010dfbd\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper2a8ad010dfbd\Psr\SimpleCache\CacheInterface;
use _PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper2a8ad010dfbd\Psr\SimpleCache\CacheInterface::class, \_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper2a8ad010dfbd\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper2a8ad010dfbd\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
