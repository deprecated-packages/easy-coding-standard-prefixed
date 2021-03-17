<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac;

use _PhpScoper0c0702cca4ac\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper0c0702cca4ac\Psr\SimpleCache\CacheInterface;
use _PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper0c0702cca4ac\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoper0c0702cca4ac\Psr\SimpleCache\CacheInterface::class, \_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoper0c0702cca4ac\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoper0c0702cca4ac\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
