<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a;

use _PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper8acb416c2f5a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper8acb416c2f5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper8acb416c2f5a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper8acb416c2f5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper8acb416c2f5a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper8acb416c2f5a\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
