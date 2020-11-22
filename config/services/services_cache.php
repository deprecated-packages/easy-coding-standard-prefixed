<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb;

use _PhpScoperc5bee3a837bb\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc5bee3a837bb\Psr\SimpleCache\CacheInterface;
use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc5bee3a837bb\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc5bee3a837bb\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
