<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5;

use _PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperac4e86be08e5\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
