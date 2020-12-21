<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033;

use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfcf15c26e033\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
