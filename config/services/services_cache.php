<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be;

use _PhpScoper842c7347e6be\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper842c7347e6be\Psr\SimpleCache\CacheInterface;
use _PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper842c7347e6be\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper842c7347e6be\Psr\SimpleCache\CacheInterface::class, \_PhpScoper842c7347e6be\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper842c7347e6be\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
