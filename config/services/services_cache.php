<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033;

use _PhpScoperfcf15c26e033\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfcf15c26e033\Psr\SimpleCache\CacheInterface;
use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfcf15c26e033\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfcf15c26e033\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfcf15c26e033\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
