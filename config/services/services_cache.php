<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972;

use _PhpScoperdeea1786e972\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperdeea1786e972\Psr\SimpleCache\CacheInterface;
use _PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperdeea1786e972\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperdeea1786e972\Psr\SimpleCache\CacheInterface::class, \_PhpScoperdeea1786e972\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperdeea1786e972\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
