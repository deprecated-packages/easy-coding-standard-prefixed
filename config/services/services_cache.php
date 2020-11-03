<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5;

use _PhpScopercf327c47dfc5\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercf327c47dfc5\Psr\SimpleCache\CacheInterface;
use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Psr16Cache;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopercf327c47dfc5\Psr\SimpleCache\CacheInterface::class, \_PhpScopercf327c47dfc5\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopercf327c47dfc5\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
