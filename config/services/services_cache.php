<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273;

use _PhpScoper833c56a97273\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper833c56a97273\Psr\SimpleCache\CacheInterface;
use _PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper833c56a97273\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper833c56a97273\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper833c56a97273\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper833c56a97273\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper833c56a97273\Psr\SimpleCache\CacheInterface::class, \_PhpScoper833c56a97273\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper833c56a97273\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper833c56a97273\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
