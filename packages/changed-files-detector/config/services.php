<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb;

use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperc5bee3a837bb\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
