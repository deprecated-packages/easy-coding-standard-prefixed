<?php

declare (strict_types=1);
namespace _PhpScopera238de2e9b5a;

use _PhpScopera238de2e9b5a\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera238de2e9b5a\Psr\SimpleCache\CacheInterface;
use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Psr16Cache;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera238de2e9b5a\Psr\SimpleCache\CacheInterface::class, \_PhpScopera238de2e9b5a\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera238de2e9b5a\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
