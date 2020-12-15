<?php

declare (strict_types=1);
namespace _PhpScoper6a1dd9b8a650;

use _PhpScoper6a1dd9b8a650\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper6a1dd9b8a650\Psr\SimpleCache\CacheInterface;
use _PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper6a1dd9b8a650\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6a1dd9b8a650\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper6a1dd9b8a650\Psr\SimpleCache\CacheInterface::class, \_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper6a1dd9b8a650\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper6a1dd9b8a650\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
