<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493;

use _PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere106f9fd4493\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
