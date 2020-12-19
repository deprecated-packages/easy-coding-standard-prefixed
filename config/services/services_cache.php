<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b;

use _PhpScoperfb2c402b972b\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfb2c402b972b\Psr\SimpleCache\CacheInterface;
use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfb2c402b972b\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfb2c402b972b\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfb2c402b972b\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
