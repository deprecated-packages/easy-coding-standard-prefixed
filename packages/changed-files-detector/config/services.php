<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06;

use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera04bf8e97c06\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
