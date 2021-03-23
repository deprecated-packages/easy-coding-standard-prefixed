<?php

declare (strict_types=1);
namespace _PhpScoper35ec99c463ee;

use _PhpScoper35ec99c463ee\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper35ec99c463ee\Psr\SimpleCache\CacheInterface;
use _PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper35ec99c463ee\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper35ec99c463ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper35ec99c463ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper35ec99c463ee\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper35ec99c463ee\Psr\SimpleCache\CacheInterface::class, \_PhpScoper35ec99c463ee\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper35ec99c463ee\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper35ec99c463ee\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
