<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f;

use _PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
