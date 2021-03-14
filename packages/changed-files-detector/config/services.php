<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5;

use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
