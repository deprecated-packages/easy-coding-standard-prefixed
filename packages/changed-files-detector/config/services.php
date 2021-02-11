<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573;

use _PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperef5048aa2573\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
