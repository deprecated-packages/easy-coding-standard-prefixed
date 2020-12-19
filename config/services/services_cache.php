<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c;

use _PhpScopera6f918786d5c\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera6f918786d5c\Psr\SimpleCache\CacheInterface;
use _PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera6f918786d5c\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera6f918786d5c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera6f918786d5c\Psr\SimpleCache\CacheInterface::class, \_PhpScopera6f918786d5c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera6f918786d5c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera6f918786d5c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
