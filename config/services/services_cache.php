<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5;

use _PhpScoperad68e34a80c5\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperad68e34a80c5\Psr\SimpleCache\CacheInterface;
use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperad68e34a80c5\Psr\SimpleCache\CacheInterface::class, \_PhpScoperad68e34a80c5\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperad68e34a80c5\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
