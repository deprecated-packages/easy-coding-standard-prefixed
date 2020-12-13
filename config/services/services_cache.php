<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use _PhpScoperd3d57724c802\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperd3d57724c802\Psr\SimpleCache\CacheInterface;
use _PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperd3d57724c802\Symfony\Component\Cache\Psr16Cache;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Psr16Cache::class);
    $services->alias(\_PhpScoperd3d57724c802\Psr\SimpleCache\CacheInterface::class, \_PhpScoperd3d57724c802\Symfony\Component\Cache\Psr16Cache::class);
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\FilesystemAdapter::class)->args(['$namespace' => '%cache_namespace%', '$defaultLifetime' => 0, '$directory' => '%cache_directory%']);
    $services->alias(\_PhpScoperd3d57724c802\Psr\Cache\CacheItemPoolInterface::class, \_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\FilesystemAdapter::class);
    $services->alias(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class, \_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapter::class);
};
