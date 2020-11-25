<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1;

use _PhpScoperaa402dd1b1f1\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperaa402dd1b1f1\Psr\SimpleCache\CacheInterface;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperaa402dd1b1f1\Psr\SimpleCache\CacheInterface::class, \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperaa402dd1b1f1\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
