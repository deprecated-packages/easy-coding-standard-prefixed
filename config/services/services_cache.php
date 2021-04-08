<?php

declare (strict_types=1);
namespace _PhpScopera909b9d9be2e;

use _PhpScopera909b9d9be2e\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera909b9d9be2e\Psr\SimpleCache\CacheInterface;
use _PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera909b9d9be2e\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera909b9d9be2e\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera909b9d9be2e\Psr\SimpleCache\CacheInterface::class, \_PhpScopera909b9d9be2e\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera909b9d9be2e\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera909b9d9be2e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
