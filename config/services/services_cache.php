<?php

declare (strict_types=1);
namespace _PhpScoper70d1796231ae;

use _PhpScoper70d1796231ae\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper70d1796231ae\Psr\SimpleCache\CacheInterface;
use _PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper70d1796231ae\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper70d1796231ae\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper70d1796231ae\Psr\SimpleCache\CacheInterface::class, \_PhpScoper70d1796231ae\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper70d1796231ae\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper70d1796231ae\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
