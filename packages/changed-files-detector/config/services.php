<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8;

use _PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercf909b66eba8\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
