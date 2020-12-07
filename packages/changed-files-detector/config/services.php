<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812;

use _PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperfa521053d812\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
