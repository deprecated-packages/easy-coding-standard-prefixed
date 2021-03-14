<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6;

use _PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere050faf861e6\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
