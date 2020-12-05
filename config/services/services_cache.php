<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c;

use _PhpScoperbaf90856897c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperbaf90856897c\Psr\SimpleCache\CacheInterface;
use _PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperbaf90856897c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperbaf90856897c\Psr\SimpleCache\CacheInterface::class, \_PhpScoperbaf90856897c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperbaf90856897c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
