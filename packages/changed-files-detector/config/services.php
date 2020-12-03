<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f;

use _PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper5c006f5f032f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
