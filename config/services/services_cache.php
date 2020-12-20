<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97;

use _PhpScoperab9510cd5d97\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperab9510cd5d97\Psr\SimpleCache\CacheInterface;
use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperab9510cd5d97\Psr\SimpleCache\CacheInterface::class, \_PhpScoperab9510cd5d97\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperab9510cd5d97\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
