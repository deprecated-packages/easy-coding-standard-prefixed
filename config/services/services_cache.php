<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670;

use _PhpScoper224ae0b86670\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper224ae0b86670\Psr\SimpleCache\CacheInterface;
use _PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper224ae0b86670\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper224ae0b86670\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper224ae0b86670\Psr\SimpleCache\CacheInterface::class, \_PhpScoper224ae0b86670\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper224ae0b86670\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper224ae0b86670\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
