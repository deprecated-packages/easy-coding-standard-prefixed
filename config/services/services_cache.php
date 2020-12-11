<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01;

use _PhpScoper23ef26a4fb01\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper23ef26a4fb01\Psr\SimpleCache\CacheInterface;
use _PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper23ef26a4fb01\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper23ef26a4fb01\Psr\SimpleCache\CacheInterface::class, \_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper23ef26a4fb01\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper23ef26a4fb01\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
