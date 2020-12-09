<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9;

use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdf15f2b748e9\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
