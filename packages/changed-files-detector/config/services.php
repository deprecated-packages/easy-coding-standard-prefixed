<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb;

use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb73f9e44f4eb\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
