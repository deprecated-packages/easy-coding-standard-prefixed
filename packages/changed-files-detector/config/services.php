<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4;

use _PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopere341acab57d4\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
