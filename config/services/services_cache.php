<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b;

use _PhpScopera40fc53e636b\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera40fc53e636b\Psr\SimpleCache\CacheInterface;
use _PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera40fc53e636b\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera40fc53e636b\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera40fc53e636b\Psr\SimpleCache\CacheInterface::class, \_PhpScopera40fc53e636b\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera40fc53e636b\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera40fc53e636b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
