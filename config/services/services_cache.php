<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f;

use _PhpScoperb458b528613f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb458b528613f\Psr\SimpleCache\CacheInterface;
use _PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb458b528613f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb458b528613f\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb458b528613f\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb458b528613f\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb458b528613f\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
