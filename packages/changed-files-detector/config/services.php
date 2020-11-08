<?php

declare (strict_types=1);
namespace _PhpScoperd79d87c3336e;

use _PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperd79d87c3336e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
