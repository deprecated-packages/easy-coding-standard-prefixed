<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99;

use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfab1bfb7ec99\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
