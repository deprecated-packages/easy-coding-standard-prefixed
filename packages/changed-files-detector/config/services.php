<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f;

use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
