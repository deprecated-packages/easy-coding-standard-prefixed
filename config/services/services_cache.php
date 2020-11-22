<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperfacc742d2745\Psr\SimpleCache\CacheInterface;
use _PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfacc742d2745\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperfacc742d2745\Psr\SimpleCache\CacheInterface::class, \_PhpScoperfacc742d2745\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperfacc742d2745\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
