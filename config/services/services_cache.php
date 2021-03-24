<?php

declare (strict_types=1);
namespace _PhpScoperc98ae2003489;

use _PhpScoperc98ae2003489\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc98ae2003489\Psr\SimpleCache\CacheInterface;
use _PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperc98ae2003489\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperc98ae2003489\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperc98ae2003489\Psr\SimpleCache\CacheInterface::class, \_PhpScoperc98ae2003489\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperc98ae2003489\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperc98ae2003489\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
