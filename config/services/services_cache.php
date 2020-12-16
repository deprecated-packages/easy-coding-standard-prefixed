<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e;

use _PhpScoperc75fd40d7a6e\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc75fd40d7a6e\Psr\SimpleCache\CacheInterface;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc75fd40d7a6e\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc75fd40d7a6e\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
