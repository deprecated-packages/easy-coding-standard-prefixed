<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34;

use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfaaf57618f34\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
