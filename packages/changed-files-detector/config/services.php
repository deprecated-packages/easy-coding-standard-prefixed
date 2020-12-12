<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153;

use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperbd5c5a045153\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
