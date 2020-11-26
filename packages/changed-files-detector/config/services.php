<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736;

use _PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercb217fd4e736\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
