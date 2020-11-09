<?php

declare (strict_types=1);
namespace _PhpScopere015d8a3273c;

use _PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopere015d8a3273c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
