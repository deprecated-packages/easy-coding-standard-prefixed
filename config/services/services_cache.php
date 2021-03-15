<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899;

use _PhpScoper64e7ad844899\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper64e7ad844899\Psr\SimpleCache\CacheInterface;
use _PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper64e7ad844899\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper64e7ad844899\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper64e7ad844899\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper64e7ad844899\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper64e7ad844899\Psr\SimpleCache\CacheInterface::class, \_PhpScoper64e7ad844899\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper64e7ad844899\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper64e7ad844899\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
