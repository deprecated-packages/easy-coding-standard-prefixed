<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc64a4ac1af35\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
