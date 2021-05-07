<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use _PhpScopercae9e6ab5cea\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercae9e6ab5cea\Psr\SimpleCache\CacheInterface;
use _PhpScopercae9e6ab5cea\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercae9e6ab5cea\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercae9e6ab5cea\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercae9e6ab5cea\Symfony\Component\Cache\Psr16Cache;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
