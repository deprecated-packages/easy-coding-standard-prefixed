<?php

declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d;

use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
