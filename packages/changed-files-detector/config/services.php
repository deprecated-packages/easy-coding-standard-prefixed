<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407;

use _PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopereb8678af2407\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
