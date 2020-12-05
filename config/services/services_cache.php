<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe;

use _PhpScoper81b3ff5ab9fe\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper81b3ff5ab9fe\Psr\SimpleCache\CacheInterface;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper81b3ff5ab9fe\Psr\SimpleCache\CacheInterface::class, \_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper81b3ff5ab9fe\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
