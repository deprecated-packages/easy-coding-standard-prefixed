<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671;

use _PhpScoperd4c5032f0671\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd4c5032f0671\Psr\SimpleCache\CacheInterface;
use _PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd4c5032f0671\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd4c5032f0671\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd4c5032f0671\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd4c5032f0671\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd4c5032f0671\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd4c5032f0671\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
