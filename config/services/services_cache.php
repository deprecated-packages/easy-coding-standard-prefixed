<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58;

use _PhpScopera51a90153f58\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera51a90153f58\Psr\SimpleCache\CacheInterface;
use _PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera51a90153f58\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera51a90153f58\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera51a90153f58\Psr\SimpleCache\CacheInterface::class, \_PhpScopera51a90153f58\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera51a90153f58\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera51a90153f58\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
