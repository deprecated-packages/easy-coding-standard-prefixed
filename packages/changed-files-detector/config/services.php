<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04;

use _PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere4fa57261c04\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
