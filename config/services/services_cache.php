<?php

declare (strict_types=1);
namespace _PhpScoperf5c57eca8aae;

use _PhpScoperf5c57eca8aae\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperf5c57eca8aae\Psr\SimpleCache\CacheInterface;
use _PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperf5c57eca8aae\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperf5c57eca8aae\Psr\SimpleCache\CacheInterface::class, \_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperf5c57eca8aae\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
