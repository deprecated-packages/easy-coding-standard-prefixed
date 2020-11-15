<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad;

use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper279cf54b77ad\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
