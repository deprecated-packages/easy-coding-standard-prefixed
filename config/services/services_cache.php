<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e;

use _PhpScoperd1a5bf00e83e\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd1a5bf00e83e\Psr\SimpleCache\CacheInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd1a5bf00e83e\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd1a5bf00e83e\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
