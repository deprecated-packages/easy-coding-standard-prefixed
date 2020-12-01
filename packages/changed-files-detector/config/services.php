<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947;

use _PhpScoperb36402634947\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb36402634947\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb36402634947\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb36402634947\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb36402634947\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb36402634947\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb36402634947\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb36402634947\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb36402634947\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb36402634947\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb36402634947\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
