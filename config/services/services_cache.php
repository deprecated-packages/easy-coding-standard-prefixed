<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3;

use _PhpScoperbc5235eb86f3\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperbc5235eb86f3\Psr\SimpleCache\CacheInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperbc5235eb86f3\Psr\SimpleCache\CacheInterface::class, \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperbc5235eb86f3\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
