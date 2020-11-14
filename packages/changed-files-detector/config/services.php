<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperddde3ba4aebc\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
