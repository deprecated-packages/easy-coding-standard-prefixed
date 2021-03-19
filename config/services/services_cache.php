<?php

declare (strict_types=1);
namespace _PhpScoperd47a2fa2a77e;

use _PhpScoperd47a2fa2a77e\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd47a2fa2a77e\Psr\SimpleCache\CacheInterface;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd47a2fa2a77e\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd47a2fa2a77e\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
