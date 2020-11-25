<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
