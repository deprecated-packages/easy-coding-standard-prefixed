<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef;

use _PhpScoper3e1e0e5bb8ef\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper3e1e0e5bb8ef\Psr\SimpleCache\CacheInterface;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper3e1e0e5bb8ef\Psr\SimpleCache\CacheInterface::class, \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper3e1e0e5bb8ef\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
