<?php

declare (strict_types=1);
namespace _PhpScopera9d6a31d814c;

use _PhpScopera9d6a31d814c\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera9d6a31d814c\Psr\SimpleCache\CacheInterface;
use _PhpScopera9d6a31d814c\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScopera9d6a31d814c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera9d6a31d814c\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScopera9d6a31d814c\Symfony\Component\Cache\Psr16Cache;
use _PhpScopera9d6a31d814c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
