<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d;

use _PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper14cb6de5473d\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
