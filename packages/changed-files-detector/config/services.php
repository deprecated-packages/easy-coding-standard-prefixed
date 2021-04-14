<?php

declare (strict_types=1);
namespace _PhpScoperd32e35cfad84;

use _PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd32e35cfad84\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
