<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0;

use _PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf65af7a6d9a0\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
