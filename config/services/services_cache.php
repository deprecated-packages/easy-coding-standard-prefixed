<?php

declare (strict_types=1);
namespace _PhpScoper000f93dc572d;

use _PhpScoper000f93dc572d\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper000f93dc572d\Psr\SimpleCache\CacheInterface;
use _PhpScoper000f93dc572d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoper000f93dc572d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper000f93dc572d\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper000f93dc572d\Symfony\Component\Cache\Psr16Cache;
use _PhpScoper000f93dc572d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(Psr16Cache::class);
    $services->alias(CacheInterface::class, Psr16Cache::class);
    $services->set(FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(CacheItemPoolInterface::class, FilesystemAdapter::class);
    $services->alias(TagAwareAdapterInterface::class, TagAwareAdapter::class);
};
