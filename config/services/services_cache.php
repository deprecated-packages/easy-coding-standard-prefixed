<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b;

use _PhpScoperdaf95aff095b\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperdaf95aff095b\Psr\SimpleCache\CacheInterface;
use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperdaf95aff095b\Psr\SimpleCache\CacheInterface::class, \_PhpScoperdaf95aff095b\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperdaf95aff095b\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
