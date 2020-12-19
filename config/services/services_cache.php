<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c;

use _PhpScoper13160cf3462c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper13160cf3462c\Psr\SimpleCache\CacheInterface;
use _PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper13160cf3462c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper13160cf3462c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper13160cf3462c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper13160cf3462c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper13160cf3462c\Psr\SimpleCache\CacheInterface::class, \_PhpScoper13160cf3462c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper13160cf3462c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper13160cf3462c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
