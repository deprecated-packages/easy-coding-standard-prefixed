<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f;

use _PhpScoperb83706991c7f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb83706991c7f\Psr\SimpleCache\CacheInterface;
use _PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb83706991c7f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb83706991c7f\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb83706991c7f\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb83706991c7f\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb83706991c7f\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb83706991c7f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
