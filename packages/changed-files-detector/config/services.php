<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d;

use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
