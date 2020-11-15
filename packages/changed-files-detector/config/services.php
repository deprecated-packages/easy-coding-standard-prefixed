<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4;

use _PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper21763e6c7ac4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper21763e6c7ac4\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper21763e6c7ac4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper21763e6c7ac4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper21763e6c7ac4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper21763e6c7ac4\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
