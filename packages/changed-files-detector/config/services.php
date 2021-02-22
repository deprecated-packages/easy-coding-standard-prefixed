<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df;

use _PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfcee700af3df\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
