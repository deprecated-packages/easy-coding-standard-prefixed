<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9;

use _PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb6d4bd368bd9\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
