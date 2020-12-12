<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b;

use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperdaf95aff095b\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
