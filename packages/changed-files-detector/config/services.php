<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
