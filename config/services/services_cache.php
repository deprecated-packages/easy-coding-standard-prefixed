<?php

declare (strict_types=1);
namespace _PhpScoper2d11f18408ea;

use _PhpScoper2d11f18408ea\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper2d11f18408ea\Psr\SimpleCache\CacheInterface;
use _PhpScoper2d11f18408ea\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper2d11f18408ea\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper2d11f18408ea\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper2d11f18408ea\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper2d11f18408ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
