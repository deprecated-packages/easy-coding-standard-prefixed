<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperba24099fc6fd\Psr\SimpleCache\CacheInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperba24099fc6fd\Psr\SimpleCache\CacheInterface::class, \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperba24099fc6fd\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
