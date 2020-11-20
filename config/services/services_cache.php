<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c;

use _PhpScoperc753ccca5a0c\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc753ccca5a0c\Psr\SimpleCache\CacheInterface;
use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc753ccca5a0c\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc753ccca5a0c\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
