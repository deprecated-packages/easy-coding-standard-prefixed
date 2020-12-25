<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16;

use _PhpScoperb44a315fec16\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperb44a315fec16\Psr\SimpleCache\CacheInterface;
use _PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperb44a315fec16\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperb44a315fec16\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb44a315fec16\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperb44a315fec16\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperb44a315fec16\Psr\SimpleCache\CacheInterface::class, \_PhpScoperb44a315fec16\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperb44a315fec16\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperb44a315fec16\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
