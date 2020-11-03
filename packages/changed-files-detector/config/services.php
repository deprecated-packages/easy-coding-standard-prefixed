<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5;

use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercf327c47dfc5\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
