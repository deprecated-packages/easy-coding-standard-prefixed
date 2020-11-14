<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperddde3ba4aebc\Psr\SimpleCache\CacheInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperddde3ba4aebc\Psr\SimpleCache\CacheInterface::class, \_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperddde3ba4aebc\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
