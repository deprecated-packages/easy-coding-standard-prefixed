<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3;

use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
