<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86;

use _PhpScoperaad82bb90a86\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperaad82bb90a86\Psr\SimpleCache\CacheInterface;
use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Psr16Cache;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperaad82bb90a86\Psr\SimpleCache\CacheInterface::class, \_PhpScoperaad82bb90a86\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperaad82bb90a86\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
