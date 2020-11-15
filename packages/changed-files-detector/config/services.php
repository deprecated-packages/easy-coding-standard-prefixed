<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee;

use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper49c742f5a4ee\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
