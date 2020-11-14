<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098;

use _PhpScopercda2b863d098\Psr\Cache\CacheItemPoolInterface;
use _PhpScopercda2b863d098\Psr\SimpleCache\CacheInterface;
use _PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopercda2b863d098\Symfony\Component\Cache\Psr16Cache;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopercda2b863d098\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopercda2b863d098\Psr\SimpleCache\CacheInterface::class, \_PhpScopercda2b863d098\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopercda2b863d098\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
