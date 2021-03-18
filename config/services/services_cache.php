<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36;

use _PhpScoperf53473b45c36\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperf53473b45c36\Psr\SimpleCache\CacheInterface;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperf53473b45c36\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf53473b45c36\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperf53473b45c36\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperf53473b45c36\Psr\SimpleCache\CacheInterface::class, \_PhpScoperf53473b45c36\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperf53473b45c36\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
