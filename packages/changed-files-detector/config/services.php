<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36;

use _PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera061b8a47e36\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
