<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a;

use _PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc8b83ee8976a\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
