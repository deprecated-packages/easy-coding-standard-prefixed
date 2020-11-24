<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f;

use _PhpScoperfd70a7e8e84f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfd70a7e8e84f\Psr\SimpleCache\CacheInterface;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfd70a7e8e84f\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfd70a7e8e84f\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
