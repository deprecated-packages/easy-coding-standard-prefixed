<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267;

use _PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
