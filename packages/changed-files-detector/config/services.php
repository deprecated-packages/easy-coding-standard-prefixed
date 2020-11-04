<?php

declare (strict_types=1);
namespace _PhpScoperfabf55fef6b7;

use _PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfabf55fef6b7\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
