<?php

declare (strict_types=1);
namespace _PhpScoper82aa0193482e;

use _PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper82aa0193482e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
