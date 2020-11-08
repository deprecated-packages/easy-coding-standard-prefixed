<?php

declare (strict_types=1);
namespace _PhpScoper190659c42b56;

use _PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper190659c42b56\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
