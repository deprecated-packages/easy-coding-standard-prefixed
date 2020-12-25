<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd;

use _PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper745103eaabcd\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
