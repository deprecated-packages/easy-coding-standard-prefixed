<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a;

use _PhpScoperb09c3ec8e01a\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb09c3ec8e01a\Psr\SimpleCache\CacheInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb09c3ec8e01a\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb09c3ec8e01a\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
