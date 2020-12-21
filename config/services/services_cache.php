<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4;

use _PhpScoperb730595bc9f4\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb730595bc9f4\Psr\SimpleCache\CacheInterface;
use _PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb730595bc9f4\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb730595bc9f4\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb730595bc9f4\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb730595bc9f4\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb730595bc9f4\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb730595bc9f4\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
