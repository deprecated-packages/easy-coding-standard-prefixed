<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a;

use _PhpScoperc95ae4bf942a\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc95ae4bf942a\Psr\SimpleCache\CacheInterface;
use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc95ae4bf942a\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc95ae4bf942a\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
