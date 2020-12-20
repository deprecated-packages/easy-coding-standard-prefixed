<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
