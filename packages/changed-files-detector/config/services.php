<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79;

use _PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopera189153e1f79\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
