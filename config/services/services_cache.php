<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb;

use _PhpScoperef870243cfdb\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperef870243cfdb\Psr\SimpleCache\CacheInterface;
use _PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperef870243cfdb\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperef870243cfdb\Psr\SimpleCache\CacheInterface::class, \_PhpScoperef870243cfdb\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperef870243cfdb\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
