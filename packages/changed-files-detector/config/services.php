<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b;

use _PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper1103e00fb46b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
