<?php

declare (strict_types=1);
namespace _PhpScoper6d28bdf6a7f9;

use _PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper6d28bdf6a7f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
