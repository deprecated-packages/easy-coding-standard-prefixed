<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c;

use _PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopera8f555a7493c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
