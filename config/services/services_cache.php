<?php

declare (strict_types=1);
namespace _PhpScoperb0c6500a504c;

use _PhpScoperb0c6500a504c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb0c6500a504c\Psr\SimpleCache\CacheInterface;
use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb0c6500a504c\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb0c6500a504c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb0c6500a504c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
