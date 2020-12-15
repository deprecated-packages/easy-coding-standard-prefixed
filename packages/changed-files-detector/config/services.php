<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972;

use _PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdeea1786e972\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
