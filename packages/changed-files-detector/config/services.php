<?php

declare (strict_types=1);
namespace _PhpScoper614deab2c612;

use _PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper614deab2c612\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper614deab2c612\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper614deab2c612\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper614deab2c612\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper614deab2c612\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper614deab2c612\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
