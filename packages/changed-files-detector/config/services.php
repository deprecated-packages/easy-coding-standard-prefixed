<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71;

use _PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb2e2c0c42e71\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
