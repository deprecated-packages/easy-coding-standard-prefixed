<?php

declare (strict_types=1);
namespace _PhpScopera238de2e9b5a;

use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera238de2e9b5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
