<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238;

use _PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc7c7dddc9238\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
