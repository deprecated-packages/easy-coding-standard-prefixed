<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b;

use _PhpScopere7e518ee6a5b\Psr\Cache\CacheItemPoolInterface;
use _PhpScopere7e518ee6a5b\Psr\SimpleCache\CacheInterface;
use _PhpScopere7e518ee6a5b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopere7e518ee6a5b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere7e518ee6a5b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopere7e518ee6a5b\Symfony\Component\Cache\Psr16Cache;
use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
