<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c;

use _PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperd301db66c80c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
