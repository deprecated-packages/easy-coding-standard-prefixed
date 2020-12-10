<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c;

use _PhpScoper9ef667a5e42c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper9ef667a5e42c\Psr\SimpleCache\CacheInterface;
use _PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper9ef667a5e42c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper9ef667a5e42c\Psr\SimpleCache\CacheInterface::class, \_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper9ef667a5e42c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper9ef667a5e42c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
