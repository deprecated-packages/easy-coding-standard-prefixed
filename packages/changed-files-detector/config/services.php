<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552;

use _PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperf361a7d70552\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
