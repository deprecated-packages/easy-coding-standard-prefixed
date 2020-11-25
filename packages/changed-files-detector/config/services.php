<?php

declare (strict_types=1);
namespace _PhpScoper7312d63d356f;

use _PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper7312d63d356f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper7312d63d356f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper7312d63d356f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper7312d63d356f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper7312d63d356f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper7312d63d356f\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
