<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da;

use _PhpScopera09818bc50da\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera09818bc50da\Psr\SimpleCache\CacheInterface;
use _PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera09818bc50da\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopera09818bc50da\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopera09818bc50da\Psr\SimpleCache\CacheInterface::class, \_PhpScopera09818bc50da\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopera09818bc50da\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopera09818bc50da\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
