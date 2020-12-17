<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18;

use _PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfa7254c25e18\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
