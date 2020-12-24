<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b;

use _PhpScoper629192f0909b\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper629192f0909b\Psr\SimpleCache\CacheInterface;
use _PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper629192f0909b\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper629192f0909b\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper629192f0909b\Psr\SimpleCache\CacheInterface::class, \_PhpScoper629192f0909b\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper629192f0909b\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper629192f0909b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
