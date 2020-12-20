<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97;

use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperab9510cd5d97\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
