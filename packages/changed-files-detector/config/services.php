<?php

declare (strict_types=1);
namespace _PhpScoperd47a2fa2a77e;

use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
