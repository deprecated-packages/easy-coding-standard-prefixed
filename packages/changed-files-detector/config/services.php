<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b;

use _PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper8b97b0dd6f5b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
