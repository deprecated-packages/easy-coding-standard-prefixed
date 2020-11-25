<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
