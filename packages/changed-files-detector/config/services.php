<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5;

use _PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
