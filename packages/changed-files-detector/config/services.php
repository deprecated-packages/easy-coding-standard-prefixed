<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a;

use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
