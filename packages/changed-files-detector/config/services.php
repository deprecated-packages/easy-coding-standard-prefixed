<?php

declare (strict_types=1);
namespace _PhpScoper16399a42e87c;

use _PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper16399a42e87c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper16399a42e87c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper16399a42e87c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper16399a42e87c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper16399a42e87c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper16399a42e87c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
