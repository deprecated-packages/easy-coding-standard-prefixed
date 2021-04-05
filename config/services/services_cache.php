<?php

declare (strict_types=1);
namespace _PhpScopercd2fc5ef50ef;

use _PhpScopercd2fc5ef50ef\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercd2fc5ef50ef\Psr\SimpleCache\CacheInterface;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Psr16Cache;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopercd2fc5ef50ef\Psr\SimpleCache\CacheInterface::class, \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopercd2fc5ef50ef\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
