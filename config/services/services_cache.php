<?php

declare (strict_types=1);
namespace _PhpScoperb6361033cf41;

use _PhpScoperb6361033cf41\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb6361033cf41\Psr\SimpleCache\CacheInterface;
use _PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb6361033cf41\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb6361033cf41\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb6361033cf41\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb6361033cf41\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb6361033cf41\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb6361033cf41\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
