<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f;

use _PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd9fcac9e904f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
