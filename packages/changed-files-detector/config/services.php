<?php

declare (strict_types=1);
namespace _PhpScoper133be48300f9;

use _PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper133be48300f9\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
