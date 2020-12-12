<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb;

use _PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperef870243cfdb\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
