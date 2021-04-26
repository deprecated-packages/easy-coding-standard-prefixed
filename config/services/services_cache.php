<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98;

use _PhpScoperd2a667bd5a98\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd2a667bd5a98\Psr\SimpleCache\CacheInterface;
use _PhpScoperd2a667bd5a98\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd2a667bd5a98\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd2a667bd5a98\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd2a667bd5a98\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd2a667bd5a98\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
