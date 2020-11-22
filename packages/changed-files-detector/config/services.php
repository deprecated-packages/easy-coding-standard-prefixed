<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af;

use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper3fa05b4669af\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper3fa05b4669af\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
