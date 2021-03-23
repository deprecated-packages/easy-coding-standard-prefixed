<?php

declare (strict_types=1);
namespace _PhpScoperf523baae4f87;

use _PhpScoperf523baae4f87\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperf523baae4f87\Psr\SimpleCache\CacheInterface;
use _PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperf523baae4f87\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperf523baae4f87\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf523baae4f87\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperf523baae4f87\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperf523baae4f87\Psr\SimpleCache\CacheInterface::class, \_PhpScoperf523baae4f87\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperf523baae4f87\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperf523baae4f87\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
