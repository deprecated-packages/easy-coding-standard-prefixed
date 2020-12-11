<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749;

use _PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperea337ed74749\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperea337ed74749\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
