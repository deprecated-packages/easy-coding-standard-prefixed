<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749;

use _PhpScoperea337ed74749\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperea337ed74749\Psr\SimpleCache\CacheInterface;
use _PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperea337ed74749\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperea337ed74749\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperea337ed74749\Psr\SimpleCache\CacheInterface::class, \_PhpScoperea337ed74749\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperea337ed74749\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
