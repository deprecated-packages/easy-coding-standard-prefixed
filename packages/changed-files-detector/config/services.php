<?php

declare (strict_types=1);
namespace _PhpScoperd8048db577a9;

use _PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd8048db577a9\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
