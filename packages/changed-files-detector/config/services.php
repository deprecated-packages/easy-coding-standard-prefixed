<?php

declare (strict_types=1);
namespace _PhpScopere66f4b626446;

use _PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopere66f4b626446\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
