<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb;

use _PhpScoperda2604e33acb\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperda2604e33acb\Psr\SimpleCache\CacheInterface;
use _PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperda2604e33acb\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperda2604e33acb\Psr\SimpleCache\CacheInterface::class, \_PhpScoperda2604e33acb\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperda2604e33acb\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
