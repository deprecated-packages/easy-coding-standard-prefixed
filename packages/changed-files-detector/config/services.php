<?php

declare (strict_types=1);
namespace _PhpScoper59558822d8c7;

use _PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper59558822d8c7\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
