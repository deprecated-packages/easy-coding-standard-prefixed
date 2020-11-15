<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad;

use _PhpScoper279cf54b77ad\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper279cf54b77ad\Psr\SimpleCache\CacheInterface;
use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper279cf54b77ad\Psr\SimpleCache\CacheInterface::class, \_PhpScoper279cf54b77ad\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper279cf54b77ad\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
