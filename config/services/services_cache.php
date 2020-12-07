<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407;

use _PhpScopereb8678af2407\Psr\Cache\CacheItemPoolInterface;
use _PhpScopereb8678af2407\Psr\SimpleCache\CacheInterface;
use _PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopereb8678af2407\Symfony\Component\Cache\Psr16Cache;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScopereb8678af2407\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScopereb8678af2407\Psr\SimpleCache\CacheInterface::class, \_PhpScopereb8678af2407\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScopereb8678af2407\Psr\Cache\CacheItemPoolInterface::class, \_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
