<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be;

use _PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper842c7347e6be\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
