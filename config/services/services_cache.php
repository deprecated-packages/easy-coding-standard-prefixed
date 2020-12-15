<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a;

use _PhpScoper47644ab3aa9a\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper47644ab3aa9a\Psr\SimpleCache\CacheInterface;
use _PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper47644ab3aa9a\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper47644ab3aa9a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47644ab3aa9a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper47644ab3aa9a\Psr\SimpleCache\CacheInterface::class, \_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper47644ab3aa9a\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper47644ab3aa9a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
