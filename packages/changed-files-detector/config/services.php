<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d;

use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera4be459e5e3d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
