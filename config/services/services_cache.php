<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9;

use _PhpScoperdf15f2b748e9\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperdf15f2b748e9\Psr\SimpleCache\CacheInterface;
use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperdf15f2b748e9\Psr\SimpleCache\CacheInterface::class, \_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperdf15f2b748e9\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
