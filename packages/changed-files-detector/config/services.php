<?php

declare (strict_types=1);
namespace _PhpScopere24d949bf310;

use _PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere24d949bf310\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
