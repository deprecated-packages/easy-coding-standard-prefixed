<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c;

use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc753ccca5a0c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
