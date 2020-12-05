<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c;

use _PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperbaf90856897c\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
