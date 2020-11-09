<?php

declare (strict_types=1);
namespace _PhpScoperae959d396e95;

use _PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperae959d396e95\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
