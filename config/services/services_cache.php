<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540;

use _PhpScoperdebd9d705540\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperdebd9d705540\Psr\SimpleCache\CacheInterface;
use _PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperdebd9d705540\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperdebd9d705540\Psr\SimpleCache\CacheInterface::class, \_PhpScoperdebd9d705540\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperdebd9d705540\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
