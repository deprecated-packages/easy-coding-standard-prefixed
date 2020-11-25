<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperaac5f7c652e4\Psr\SimpleCache\CacheInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperaac5f7c652e4\Psr\SimpleCache\CacheInterface::class, \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperaac5f7c652e4\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
