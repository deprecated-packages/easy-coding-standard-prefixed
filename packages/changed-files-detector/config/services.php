<?php

declare (strict_types=1);
namespace _PhpScopercd2fc5ef50ef;

use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
