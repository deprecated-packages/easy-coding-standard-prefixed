<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d;

use _PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercae980ebf12d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
