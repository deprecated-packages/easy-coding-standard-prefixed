<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153;

use _PhpScoperbd5c5a045153\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperbd5c5a045153\Psr\SimpleCache\CacheInterface;
use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperbd5c5a045153\Psr\SimpleCache\CacheInterface::class, \_PhpScoperbd5c5a045153\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperbd5c5a045153\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
