<?php

declare (strict_types=1);
namespace _PhpScoperb0c6500a504c;

use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb0c6500a504c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
