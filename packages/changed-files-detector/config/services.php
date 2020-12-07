<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb;

use _PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperda2604e33acb\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
