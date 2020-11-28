<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55;

use _PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfcce67077a55\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
