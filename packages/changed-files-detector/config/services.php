<?php

declare (strict_types=1);
namespace _PhpScoper589e8c04a9ef;

use _PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper589e8c04a9ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper589e8c04a9ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper589e8c04a9ef\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper589e8c04a9ef\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
