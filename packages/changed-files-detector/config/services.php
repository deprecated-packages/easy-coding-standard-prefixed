<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad;

use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper9d73a84b09ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
