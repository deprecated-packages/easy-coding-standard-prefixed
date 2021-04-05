<?php

declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d;

use _PhpScoperf6b7f9bf122d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperf6b7f9bf122d\Psr\SimpleCache\CacheInterface;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperf6b7f9bf122d\Psr\SimpleCache\CacheInterface::class, \_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperf6b7f9bf122d\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
