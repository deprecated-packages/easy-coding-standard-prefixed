<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030;

use _PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdf6a0b341030\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
