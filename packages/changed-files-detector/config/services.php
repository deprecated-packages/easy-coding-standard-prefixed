<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8;

use _PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperbcc0395698f8\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
