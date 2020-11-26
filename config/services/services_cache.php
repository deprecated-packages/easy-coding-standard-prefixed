<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde;

use _PhpScoper167729fa1dde\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper167729fa1dde\Psr\SimpleCache\CacheInterface;
use _PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper167729fa1dde\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper167729fa1dde\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper167729fa1dde\Psr\SimpleCache\CacheInterface::class, \_PhpScoper167729fa1dde\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper167729fa1dde\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper167729fa1dde\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
