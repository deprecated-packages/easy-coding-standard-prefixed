<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d;

use _PhpScoperb26833cc184d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb26833cc184d\Psr\SimpleCache\CacheInterface;
use _PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb26833cc184d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb26833cc184d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb26833cc184d\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb26833cc184d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb26833cc184d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb26833cc184d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
