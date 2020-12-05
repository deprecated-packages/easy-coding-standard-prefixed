<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d;

use _PhpScoper87c77ad5700d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper87c77ad5700d\Psr\SimpleCache\CacheInterface;
use _PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper87c77ad5700d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper87c77ad5700d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper87c77ad5700d\Psr\SimpleCache\CacheInterface::class, \_PhpScoper87c77ad5700d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper87c77ad5700d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper87c77ad5700d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
