<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef;

use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
