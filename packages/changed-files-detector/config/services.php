<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a;

use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperc95ae4bf942a\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
