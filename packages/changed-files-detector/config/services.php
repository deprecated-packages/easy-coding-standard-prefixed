<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db;

use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
