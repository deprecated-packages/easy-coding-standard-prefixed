<?php

declare (strict_types=1);
namespace _PhpScoper3c44535fe75f;

use _PhpScoper3c44535fe75f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper3c44535fe75f\Psr\SimpleCache\CacheInterface;
use _PhpScoper3c44535fe75f\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper3c44535fe75f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper3c44535fe75f\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper3c44535fe75f\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper3c44535fe75f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
