<?php

declare (strict_types=1);
namespace _PhpScoper611f49771945;

use _PhpScoper611f49771945\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper611f49771945\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper611f49771945\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper611f49771945\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper611f49771945\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper611f49771945\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
