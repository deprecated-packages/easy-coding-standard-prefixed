<?php

declare (strict_types=1);
namespace _PhpScoper5cb8aea05893;

use _PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper5cb8aea05893\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
