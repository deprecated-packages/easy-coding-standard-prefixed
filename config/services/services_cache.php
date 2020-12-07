<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb;

use _PhpScoperb73f9e44f4eb\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb73f9e44f4eb\Psr\SimpleCache\CacheInterface;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb73f9e44f4eb\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb73f9e44f4eb\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
