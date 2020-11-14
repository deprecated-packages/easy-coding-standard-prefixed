<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098;

use _PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopercda2b863d098\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
