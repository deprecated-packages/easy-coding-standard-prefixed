<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b;

use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfb2c402b972b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
