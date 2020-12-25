<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1;

use _PhpScoperc8fea59b0cb1\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc8fea59b0cb1\Psr\SimpleCache\CacheInterface;
use _PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc8fea59b0cb1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc8fea59b0cb1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc8fea59b0cb1\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc8fea59b0cb1\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
