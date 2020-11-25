<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c;

use _PhpScoperd301db66c80c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd301db66c80c\Psr\SimpleCache\CacheInterface;
use _PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd301db66c80c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd301db66c80c\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd301db66c80c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd301db66c80c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
