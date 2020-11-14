<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e;

use _PhpScoperecb978830f1e\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperecb978830f1e\Psr\SimpleCache\CacheInterface;
use _PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperecb978830f1e\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperecb978830f1e\Psr\SimpleCache\CacheInterface::class, \_PhpScoperecb978830f1e\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperecb978830f1e\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
