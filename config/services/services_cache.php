<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af;

use _PhpScoper3fa05b4669af\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper3fa05b4669af\Psr\SimpleCache\CacheInterface;
use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper3fa05b4669af\Psr\SimpleCache\CacheInterface::class, \_PhpScoper3fa05b4669af\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper3fa05b4669af\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
