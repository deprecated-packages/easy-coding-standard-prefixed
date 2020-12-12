<?php

declare (strict_types=1);
namespace _PhpScoper79449c4e744b;

use _PhpScoper79449c4e744b\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper79449c4e744b\Psr\SimpleCache\CacheInterface;
use _PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper79449c4e744b\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper79449c4e744b\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper79449c4e744b\Psr\SimpleCache\CacheInterface::class, \_PhpScoper79449c4e744b\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper79449c4e744b\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper79449c4e744b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
