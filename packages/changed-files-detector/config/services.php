<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f;

use _PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb458b528613f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
