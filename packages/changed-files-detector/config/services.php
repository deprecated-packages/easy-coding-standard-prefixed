<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5;

use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperad68e34a80c5\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
